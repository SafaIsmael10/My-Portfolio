/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package uk.ac.kingston.ci5105.outliner;

/**
 *
 * @author safai
 */
import javax.swing.*;
import javax.swing.tree.*;
import java.awt.*;
import java.io.*;

public class OutlinerNB extends JFrame 
{
    private JTree tree;
    private DefaultTreeModel treeModel;

    public OutlinerNB() 
    {
        //created a root node (team), created tree model with the root node, created JTree with the tree model
        DefaultMutableTreeNode root = new DefaultMutableTreeNode("Kingston Cavaliers");
        treeModel = new DefaultTreeModel(root);
        tree = new JTree(treeModel);
        
        //created add button which gets selected node/node clicked on, prompts user to enter item name(in this case position/player), then creates a new node with item name as the child node of the selected node
        //if user leaves prompt blank and enters, user will be given warning message saying they cannot have item name blank
        JButton addButton = new JButton("Add Item");
        addButton.addActionListener(e -> 
        {
            DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) tree.getLastSelectedPathComponent();
            String itemName = JOptionPane.showInputDialog("Enter position/player name:");
            DefaultMutableTreeNode itemNode = new DefaultMutableTreeNode(itemName);
            if (!"".equals(itemName))
            {
            treeModel.insertNodeInto(itemNode, selectedNode, selectedNode.getChildCount());
            }
            else
            {
                Component frame = null;
                JOptionPane.showMessageDialog(frame,"Cannot have item name blank", "Error", JOptionPane.WARNING_MESSAGE);
            }
        });
        
        //created edit button which gets selected node, prompts user to enter a new iteam name to replace the old one, then sets the selected nodes name as the one entered by the user
        //if user leaves prompt blank and enters, user will be given warning message saying they cannot have item name blank
        JButton editButton = new JButton("Edit Item");
        editButton.addActionListener(e -> 
        {
            DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) tree.getLastSelectedPathComponent();
            String newItemName = JOptionPane.showInputDialog("Enter new position/player name:");
            if (!"".equals(newItemName))
            {
            selectedNode.setUserObject(newItemName);
            treeModel.nodeChanged(selectedNode);
            }
            else
            {
                Component frame = null;
                JOptionPane.showMessageDialog(frame,"Cannot have item name blank", "Error", JOptionPane.WARNING_MESSAGE);
            }
        });
        
        //created delete button which gets selected node, then removes it from it's parent node(this is important as it doesn't allow user to delete root node since it has no parent node)
        JButton deleteButton = new JButton("Delete Item");
        deleteButton.addActionListener(e -> 
        {
            DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) tree.getLastSelectedPathComponent();
            if (selectedNode != null && selectedNode.getParent() != null) 
            {
                treeModel.removeNodeFromParent(selectedNode);
            }
        });
        
        //created popup menu which comes up when a node/item is right clicked
        JPopupMenu popupMenu = new JPopupMenu();
        JMenuItem addMenuItem = new JMenuItem("Add Item");
        JMenuItem editMenuItem = new JMenuItem("Edit Item");
        JMenuItem deleteMenuItem = new JMenuItem("Delete Item");

        //same function as add button
        addMenuItem.addActionListener(e -> 
        {
            DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) tree.getLastSelectedPathComponent();
            String itemName = JOptionPane.showInputDialog("Enter position/player name:");
            DefaultMutableTreeNode itemNode = new DefaultMutableTreeNode(itemName);
            if (!"".equals(itemName))
            {
            treeModel.insertNodeInto(itemNode, selectedNode, selectedNode.getChildCount());
            }
            else
            {
                Component frame = null;
                JOptionPane.showMessageDialog(frame,"Cannot have item name blank", "Error", JOptionPane.WARNING_MESSAGE);
            }
        });

        //same funcion as edit button
        editMenuItem.addActionListener(e -> 
        {
            DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) tree.getLastSelectedPathComponent();
            String newItemName = JOptionPane.showInputDialog("Enter new position/player name:");
            if (!"".equals(newItemName))
            {
            selectedNode.setUserObject(newItemName);
            treeModel.nodeChanged(selectedNode);
            }
            else
            {
                Component frame = null;
                JOptionPane.showMessageDialog(frame,"Cannot have item name blank", "Error", JOptionPane.WARNING_MESSAGE);
            }
        });
        
        //same function as delete button
        deleteMenuItem.addActionListener(e -> 
        {
            DefaultMutableTreeNode selectedNode = (DefaultMutableTreeNode) tree.getLastSelectedPathComponent();
            if (selectedNode != null && selectedNode.getParent() != null) 
            {
                treeModel.removeNodeFromParent(selectedNode);
            }
        });

        //created panel for buttons
        JPanel buttonPanel = new JPanel();
        buttonPanel.setLayout(new GridLayout(3, 1));
        buttonPanel.add(addButton);
        buttonPanel.add(editButton);
        buttonPanel.add(deleteButton);
        
        //added add/edit/delete functions into popup menu and sets the right click menu for the JTree
        popupMenu.add(addMenuItem);
        popupMenu.add(editMenuItem);
        popupMenu.add(deleteMenuItem);
        tree.setComponentPopupMenu(popupMenu);
        
        //created toolbar for the save/load buttons
        JToolBar toolBar = new JToolBar();

        //created save button which prompts user for a file name to save tree/content to, then saves the tree to the file
        JButton saveButton = new JButton("Save");
        saveButton.addActionListener(e -> 
        {
            JFileChooser fileChooser = new JFileChooser();
            int result = fileChooser.showSaveDialog(this);
            if (result == JFileChooser.APPROVE_OPTION) 
            {
                try 
                {
                    ObjectOutputStream out = new ObjectOutputStream(new FileOutputStream(fileChooser.getSelectedFile()));
                    out.writeObject(treeModel.getRoot());
                    out.close();
                } 
                catch (IOException ex) 
                {
                    ex.printStackTrace();
                }
            }
        });

        //created load button which prompts user to select a file to load the tree from, then loads the tree from the selected file
        JButton loadButton = new JButton("Load");
        loadButton.addActionListener(e -> 
        {
            JFileChooser fileChooser = new JFileChooser();
            int result = fileChooser.showOpenDialog(this);
            if (result == JFileChooser.APPROVE_OPTION) 
            {
                try 
                {
                    ObjectInputStream in = new ObjectInputStream(new FileInputStream(fileChooser.getSelectedFile()));
                    DefaultMutableTreeNode newRoot = (DefaultMutableTreeNode) in.readObject();
                    treeModel.setRoot(newRoot);
                    in.close();
                } 
                catch (IOException | ClassNotFoundException ex) 
                {
                    ex.printStackTrace();
                }
            }
        });

        //added save/load buttons to the toolbar
        toolBar.add(saveButton);
        toolBar.add(loadButton);

        //made layout for the app
        add(toolBar, BorderLayout.NORTH);
        add(buttonPanel, BorderLayout.SOUTH);
        add(new JScrollPane(tree), BorderLayout.CENTER);

        //set the JFrame properties
        setTitle("5-a-Side Squad Builder");
        setSize(400, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
    }

    //execute code/create new app based off constructor
    public static void main(String[] args) 
    {
        new OutlinerNB();
    }
}