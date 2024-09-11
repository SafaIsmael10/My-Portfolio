$(function() {
    $("#time").timepicker({
      timeFormat: 'HH:mm',
      interval: 15,
      scrollbar: true,
      minTime: '00:00',
      maxTime: '23:45'
    });
  });