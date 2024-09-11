<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .head:hover, .torso:hover, .arms:hover, .legs:hover 
        {fill: #76B852;}

        .head-menu, .torso-menu, .arms-menu, .legs-menu
        {
            display: none;
            position: absolute;
            background: #FFFFFF;
            border: 1px solid #CCCCCC;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 9999
        }

        #headContent, #torsoContent, #armsContent, #legsContent
        {list-style-type: none; padding: 0;}

        #headContent li, #torsoContent li, #armsContent li, #legsContent li
        {border: 1px solid #DDDDDD; margin-bottom: 5px; padding: 8px; cursor: pointer;}

        #headContent li:hover, #torsoContent li:hover, #armsContent li:hover, #legsContent li:hover
        {background-color: #F5F5F5;}

        .head-illness-menu, .torso-illness-menu, .arms-illness-menu, .legs-illness-menu 
        {
            display: none;
            position: absolute;
            background-color: #FFFFFF;
            border: 1px solid #CCCCCC;
            padding: 10px;
            z-index: 2;
        }

        #headIllnessContent, #torsoIllnessContent, #armsIllnessContent, #legsIllnessContent
        {display: flex; flex-direction: column;}

        .illness-detail {margin-bottom: 10px;}
        .illness-detail img {max-width: 100%;}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<svg
    width="100mm" 
    height="130mm"
    viewBox="0 0 210 297"
    version="1.1"
    id="svg1"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:svg="http://www.w3.org/2000/svg">
    <defs id="defs1" />
    <g id="layer1">
    <!-- head -->
    <g class="head" fill="#808080" data-illness="Headache,Skull Fracture,Ear Infection">
    <ellipse
       id="path1-2"
       cx="106.77944"
       cy="34.640976"
       rx="17.686331"
       ry="21.505299" />
    <path
       d="m 89.755419,31.716252 c 0.475697,-1.404823 -0.261875,-1.460745 -0.841128,-2.408591 -0.06269,-0.102584 0.09912,-0.262983 0,-0.344085 -1.150988,-0.941689 -2.047754,-0.755739 -2.943935,0.344085 -0.155516,0.190866 0.125395,0.482995 0,0.688168 -0.177312,0.290153 -0.663789,0.398008 -0.841111,0.688169 -0.204631,0.334816 0.33599,2.958383 0.42056,3.096761 0.320767,0.524885 0.948073,0.863166 1.261687,1.376339 0.224287,0.367032 -0.224304,1.009314 0,1.376338 0.333764,0.546162 1.404709,0.805187 1.68223,1.032261 0.194413,0.159053 -0.126948,0.8245 0,1.032254 0.339192,0.554997 1.153605,0.255655 1.682248,0.688161"
       id="path2-5" />
    <path
       d="m 122.47147,31.622551 c -0.5695,-1.404823 0.31349,-1.460745 1.00695,-2.4086 0.0751,-0.102582 -0.1186,-0.262974 0,-0.344076 1.37791,-0.941688 2.45147,-0.755738 3.52432,0.344076 0.1862,0.190876 -0.1501,0.483004 0,0.688178 0.21229,0.290161 0.79466,0.398015 1.00696,0.688161 0.24495,0.334823 -0.40225,2.95839 -0.50348,3.096769 -0.38401,0.524884 -1.13499,0.863165 -1.51042,1.376338 -0.26853,0.367032 0.26851,1.009315 0,1.376338 -0.39959,0.546155 -1.68167,0.805188 -2.01392,1.032261 -0.23273,0.159054 0.15199,0.824501 0,1.032254 -0.40605,0.554998 -1.38102,0.255648 -2.01389,0.688161"
       id="path2-9-1" />
    <path
       d="m 90.536915,31.372168 c 0.394661,-0.863336 0.360938,-1.545822 0.360938,-2.408592 0,-2.715995 0.09239,-5.32924 -1.082828,-7.569864 -0.50626,-0.965226 0.638934,-1.218167 0.72189,-1.37634 0.161421,-0.307759 0.360938,-1.032253 0,-1.032253 -0.380465,0 0.190794,0.707846 0.360938,1.032253 0.288768,0.550535 -0.288743,1.513973 0,2.064509 0.219318,0.418123 0.886505,0.561501 1.082846,0 0.159907,-0.457304 -0.229147,-1.283543 0,-1.720426 0.269163,-0.513169 0.807532,-0.851453 1.082837,-1.376336 0.108966,-0.20775 -0.166857,-0.873198 0,-1.032257 0.190241,-0.181348 0.531658,-0.162734 0.721892,-0.344083 0.419463,-0.399874 1.00072,-2.408595 1.804728,-2.408595 0.240622,0 0,0.458779 0,0.68817 0,0.04679 0,1.767209 0,1.720425 0,-0.344085 -0.09916,-0.701411 0,-1.032256 0.228797,-0.763384 4.101778,-6.9651844 5.053234,-7.5698654 1.1378,-0.723102 -1.592915,4.2674074 -0.721886,4.1290184 2.510756,-0.398911 8.532126,-3.2212214 8.662676,-3.096764 0.27034,0.257702 -3.18983,3.184905 -3.60945,3.784933 -0.40574,0.580183 1.4743,-0.530669 1.80473,-0.688169 5.28365,-2.518421 -0.59455,0.260248 2.88757,-0.688171 0.51735,-0.140913 0.93997,-0.508067 1.44377,-0.688169 1.10786,-0.396039 2.11262,-0.344085 3.24852,-0.344085 1.50488,0 1.08283,-0.310217 1.08283,1.720425 0,0.229389 0.10761,0.482997 0,0.688169 -0.22828,0.435237 -0.62626,0.814637 -1.08283,1.032255 -0.10762,0.0513 -0.36095,-0.114696 -0.36095,0 0,0.804229 5.01743,0.05516 5.77514,0.344084 4.18716,1.596631 -0.3851,2.737337 0.72188,3.44085 0.42224,0.268344 3.28726,1.302452 2.88756,2.064506 -0.194,0.369882 -0.41514,0.73984 -0.72189,1.032255 -0.15313,0.145985 -1.44378,0.347912 -1.44378,0.68817 0,0.743799 2.6346,2.270397 2.88756,2.752677 0.24063,0.458785 -0.24063,1.261644 0,1.720434 0.21658,0.412887 0.86627,0.619351 1.08284,1.032238 0.32584,0.621237 -0.57145,0.544769 -0.7219,0.688177 -0.36389,0.346906 0.16509,1.21897 -0.36094,1.720423"
       id="path3-0" />
    <path
       d="m 102.1521,52.933919 -1.60284,10.950488 14.74602,-0.608356 -3.52623,-11.254675 z"
       id="path22" />
    </g>
    <!-- torso -->
    <g class="torso" fill="#808080" data-illness="Chest Infection,Food Poisoning,Appendicitis">
    <path
       d="m 54.322887,68.350789 36.864991,-4.866882 16.669412,3.95434 13.78428,-3.95434 33.3388,3.0418 v 16.42573 l 4.48791,5.779427 -12.50206,22.813506 -8.33469,5.47525 -0.64113,17.03408 -5.77018,27.07204 -45.520259,0.60837 -5.129036,-24.33442 -5.129053,-18.85917 -9.296374,-6.69196 -12.822619,-19.467535 1.923396,-7.300326 z"
       id="path19" />
    </g>
    <!-- arms -->
    <g class="arms" fill="#808080" data-illness="Sprained Wrist,Dislocated Shoulder">
    <path
       d="M 31.242197,69.263329 C 20.342981,93.293564 33.80671,99.681347 33.80671,99.681347 l -6.411305,14.296463 7.05244,17.64246 v 15.81737 l -11.219778,5.47525 2.24395,2.73762 9.616963,-5.17107 -8.334702,10.95049 2.564522,0.60836 7.05244,-9.1254 -5.770178,12.1672 2.564522,0.60836 6.090742,-13.38392 -1.923396,11.86302 h 2.243959 l 2.564522,-12.47139 0.320564,9.42959 3.846782,-0.91254 -2.243958,-12.47139 3.205657,-21.59679 -3.52622,-17.03409 9.937525,-23.1177 -0.961698,-18.554993 z"
       id="path18" />
    <path
       d="m 181.16491,66.140658 c 10.4403,24.030235 -2.45655,30.418019 -2.45655,30.418019 l 6.14136,14.296463 -6.7555,17.64246 v 15.81737 l 10.74738,5.47524 -2.14947,2.73762 -9.21204,-5.17106 7.98376,10.95048 -2.45654,0.60836 -6.7555,-9.1254 5.52723,12.16721 -2.45655,0.60835 -5.83428,-13.38392 1.84241,11.86303 h -2.14947 l -2.45655,-12.47139 -0.30707,9.42958 -3.68481,-0.91253 2.14947,-12.4714 -3.07068,-21.59678 3.37775,-17.0341 -9.51911,-23.117692 0.92121,-18.554992 z"
       id="path18-9" />
    </g>
    <!-- legs -->
    <g class="legs" fill="#808080" data-illness="ACL Tear,Sprained Ankle,Ingrown Toe Nail">
    <path
       d="m 105.29276,166.43591 -25.645223,-0.74746 -6.731877,34.75723 9.296391,17.19173 -2.885077,6.72722 3.846775,6.7272 5.770179,38.86829 -8.655273,3.73733 -5.129035,-0.37373 -1.923405,4.4848 6.731877,-1.49494 -4.487918,1.49494 -0.641118,3.73734 3.846784,-3.36361 -3.52622,3.73735 -0.641118,3.3636 4.487893,-4.85854 -3.526221,4.11106 0.961706,2.2424 2.24396,-3.36359 -1.602825,2.98987 1.282261,1.86867 9.296391,-7.84841 9.616954,-3.3636 3.526219,-5.60601 -2.243958,-4.11107 V 248.6573 l 2.243958,-10.46454 -5.770178,-9.71707 1.282261,-19.06041 z"
       id="path20" />    
    <path
       d="m 80.566237,167.35082 c -28.107556,16.34668 -3.17343,37.85546 -3.17343,37.85546 l 6.346867,-23.22948 z"
       id="path23" />
    <path
       d="m 104.59366,167.35082 c 6.80022,24.52001 -9.520297,48.17969 -9.520297,48.17969 l -1.813385,-27.53126 z"
       id="path24" />
    <path
       d="m 115.86251,166.52823 24.36425,-0.74748 6.39563,34.75723 -8.83205,17.19173 2.74097,6.72722 -3.65462,6.7272 -5.48196,38.8683 8.22294,3.73732 4.87284,-0.37372 1.82733,4.4848 -6.39562,-1.49494 4.26375,1.49494 0.60909,3.73733 -3.65463,-3.3636 3.35008,3.73734 0.60909,3.3636 -4.26372,-4.85854 3.35009,4.11107 -0.91368,2.24241 -2.13186,-3.3636 1.52276,2.98986 -1.21821,1.86867 -8.83205,-7.84841 -9.13658,-3.36359 -3.35009,-5.60601 2.13188,-4.11107 v -18.68668 l -2.13188,-10.46454 5.48196,-9.71708 -1.21821,-19.0604 z"
       id="path20-22" />
    <path
       d="m 139.35395,167.44313 c 26.7036,16.34667 3.01491,37.85546 3.01491,37.85546 l -6.02983,-23.22949 z"
       id="path23-0" />
    <path
       d="m 116.52669,167.44313 c -6.46054,24.52002 9.04476,48.17968 9.04476,48.17968 l 1.72281,-27.53124 z"
       id="path24-6" />
    </g>
    </g>
</svg>
<!-- ------------------------------------------------------------------------------------------------------------ -->
    <!-- head menu -->
    <div class="head-menu" id="headMenu">
        <ul id="headContent"></ul>
    </div>
    <div class="head-illness-menu" id="headIllnessMenu">
        <div id="headIllnessContent"></div>
    </div>

    <script>
    $(document).ready(function () 
    {
        $(".head").click(function (event) 
        {
            var head = $(this);
            var illnesses = head.data("illness").split(",");
            var position = head.position();

            var headContent = $("#headContent");
            headContent.empty();
            $.each(illnesses, function (index, illness) 
            {
                headContent.append("<li class='illness'>" + illness.trim() + "</li>");
            });

            $("#headMenu").css({
                top: event.pageY + 10,
                left: event.pageX + 10
            }).fadeIn();

            event.stopPropagation();
        });

        $(document).on("click", function (e) 
        {
            if (!$(e.target).closest(".head, .illness, #headMenu").length) 
            {
                $("#headMenu").fadeOut();
                $("#headIllnessMenu").fadeOut();
            }
        });

        $(document).on("click", ".illness", function () 
        {
            var illness = $(this).text();
            showIllnessDetails(illness);
        });

        var illnessDetails = 
        {
            "Headache": 
            {
                description: "Migraine or pain in the head.",
                symptoms: "Pain in waves", 
                image: "../images/headache.jpg"
            },
            "Skull Fracture": 
            {
                description: "Breakeage in the skull.",
                symptoms: "Heavy pain in head, maybe bleeding, swelling",
                image: ""
            },
            "Ear Infection": 
            {
                description: "Germs enter inner ear.",
                symptoms: "Pain and ringing in ears",
                image: ""
            },
        }

        function showIllnessDetails(illness) 
        {
            if (illnessDetails.hasOwnProperty(illness)) 
            {
                var headIllnessContent = $("#headIllnessContent");
                headIllnessContent.empty();
                headIllnessContent.append("<div class='illness-detail'>Description: " + illnessDetails[illness].description + "</div>");
                headIllnessContent.append("<div class='illness-detail'>Symptoms: " + illnessDetails[illness].symptoms + "</div>");
                headIllnessContent.append("<img src='" + illnessDetails[illness].image + "' alt='Illness Image' style='height: 100px; width: 150px;'>" + "</div>");

                $("#headIllnessMenu").css({
                    top: event.pageY,
                    left: event.pageX + 150
                }).fadeIn();

                event.stopPropagation();
            } 
        }
    });
    </script>
    <!-- torso menu -->
    <div class="torso-menu" id="torsoMenu">
        <ul id="torsoContent"></ul>
    </div>
    <div class="torso-illness-menu" id="torsoIllnessMenu">
        <div id="torsoIllnessContent"></div>
    </div>

    <script>
    $(document).ready(function () 
    {
        $(".torso").click(function (event) 
        {
            var torso = $(this);
            var illnesses = torso.data("illness").split(",");
            var position = torso.position();

            var torsoContent = $("#torsoContent");
            torsoContent.empty();
            $.each(illnesses, function (index, illness) 
            {
                torsoContent.append("<li class='illness'>" + illness.trim() + "</li>");
            });

            $("#torsoMenu").css({
                top: event.pageY + 10,
                left: event.pageX + 10
            }).fadeIn();

            event.stopPropagation();
        });

        $(document).on("click", function (e) 
        {
            if (!$(e.target).closest(".torso, .illness, #torsoMenu").length) 
            {
                $("#torsoMenu").fadeOut();
                $("#torsoIllnessMenu").fadeOut();
            }
        });

        $(document).on("click", ".illness", function () 
        {
            var illness = $(this).text();
            showIllnessDetails(illness);
        });

        var illnessDetails = 
        {
            "Chest Infection": 
            {
                description: "Lungs have been infected with a virus.",
                symptoms: "Heavy Chest, Coughing", 
                image: ""
            },
            "Food Poisoning": 
            {
                description: "Stomache ache caused by bad badteria from food.",
                symptoms: "Stomach Pain, Vomiting",
                image: ""
            },
            "Appendicitis": 
            {
                description: "When the appendix swells up and burts. Can cause serious infection.",
                symptoms: "Sharp Pain In Lower Right Abdomen",
                image: ""
            },
        }

        function showIllnessDetails(illness) 
        {
            if (illnessDetails.hasOwnProperty(illness)) 
            {
                var torsoIllnessContent = $("#torsoIllnessContent");
                torsoIllnessContent.empty();
                torsoIllnessContent.append("<div class='illness-detail'>Description: " + illnessDetails[illness].description + "</div>");
                torsoIllnessContent.append("<div class='illness-detail'>Symptoms: " + illnessDetails[illness].symptoms + "</div>");
                torsoIllnessContent.append("<div class='illness-detail'>Image: " + "<img src='" + illnessDetails[illness].image + "' alt='Illness Image'>" + "</div>");

                $("#torsoIllnessMenu").css({
                    top: event.pageY,
                    left: event.pageX + 150
                }).fadeIn();

                event.stopPropagation();
            } 
        }
    });
    </script>
    <!-- arms menu -->
    <div class="arms-menu" id="armsMenu">
        <ul id="armsContent"></ul>
    </div>
    <div class="arms-illness-menu" id="armsIllnessMenu">
        <div id="armsIllnessContent"></div>
    </div>

    <script>
    $(document).ready(function () 
    {
        $(".arms").click(function (event) 
        {
            var arms = $(this);
            var illnesses = arms.data("illness").split(",");
            var position = arms.position();

            var armsContent = $("#armsContent");
            armsContent.empty();
            $.each(illnesses, function (index, illness) 
            {
                armsContent.append("<li class='illness'>" + illness.trim() + "</li>");
            });

            $("#armsMenu").css({
                top: event.pageY + 10,
                left: event.pageX + 10
            }).fadeIn();

            event.stopPropagation();
        });

        $(document).on("click", function (e) 
        {
            if (!$(e.target).closest(".arms, .illness, #armsMenu").length) 
            {
                $("#armsMenu").fadeOut();
                $("#armsIllnessMenu").fadeOut();
            }
        });

        $(document).on("click", ".illness", function () 
        {
            var illness = $(this).text();
            showIllnessDetails(illness);
        });

        var illnessDetails = 
        {
            "Sprained Wrist": 
            {
                description: "Ligament/Joint injury in the wrist.",
                symptoms: "Wrist Pain, Difficulty in Wrist Movement", 
                image: ""
            },
            "Dislocated Shoulder": 
            {
                description: "Arm pops out of place from the collar bone socket.",
                symptoms: "Shoulder Pain, Shoulder Out of Place",
                image: ""
            },
        }

        function showIllnessDetails(illness) 
        {
            if (illnessDetails.hasOwnProperty(illness)) 
            {
                var armsIllnessContent = $("#armsIllnessContent");
                armsIllnessContent.empty();
                armsIllnessContent.append("<div class='illness-detail'>Description: " + illnessDetails[illness].description + "</div>");
                armsIllnessContent.append("<div class='illness-detail'>Symptoms: " + illnessDetails[illness].symptoms + "</div>");
                armsIllnessContent.append("<div class='illness-detail'>Image: " + "<img src='" + illnessDetails[illness].image + "' alt='Illness Image'>" + "</div>");

                $("#armsIllnessMenu").css({
                    top: event.pageY,
                    left: event.pageX + 150
                }).fadeIn();

                event.stopPropagation();
            } 
        }
    });
    </script>
    <!-- legs menu -->
    <div class="legs-menu" id="legsMenu">
        <ul id="legsContent"></ul>
    </div>
    <div class="legs-illness-menu" id="legsIllnessMenu">
        <div id="legsIllnessContent"></div>
    </div>

    <script>
    $(document).ready(function () 
    {
        $(".legs").click(function (event) 
        {
            var legs = $(this);
            var illnesses = legs.data("illness").split(",");
            var position = legs.position();

            var legsContent = $("#legsContent");
            legsContent.empty();
            $.each(illnesses, function (index, illness) 
            {
                legsContent.append("<li class='illness'>" + illness.trim() + "</li>");
            });

            $("#legsMenu").css({
                top: event.pageY + 10,
                left: event.pageX + 10
            }).fadeIn();

            event.stopPropagation();
        });

        $(document).on("click", function (e) 
        {
            if (!$(e.target).closest(".legs, .illness, #legsMenu").length) 
            {
                $("#legsMenu").fadeOut();
                $("#legsIllnessMenu").fadeOut();
            }
        });

        $(document).on("click", ".illness", function () 
        {
            var illness = $(this).text();
            showIllnessDetails(illness);
        });

        var illnessDetails = 
        {
            "ACL Tear": 
            {
                description: "Tearing of the ACL ligament inside the knee. Will need surgery.",
                symptoms: "Heavy Knee Pain, Unable to Apply Pressure to Knee", 
                image: ""
            },
            "Sprained Ankle": 
            {
                description: "Ligament/Joint injury in the ankle.",
                symptoms: "Ankle Pain, Difficulty in Ankle Movement",
                image: ""
            },
            "Ingrown Toe Nail": 
            {
                description: "Toe nail growing in the wrong direction digging into skin. Can cause more health issues.",
                symptoms: "Toe Pain, Swelling, Redness",
                image: ""
            },
        }

        function showIllnessDetails(illness) 
        {
            if (illnessDetails.hasOwnProperty(illness)) 
            {
                var legsIllnessContent = $("#legsIllnessContent");
                legsIllnessContent.empty();
                legsIllnessContent.append("<div class='illness-detail'>Description: " + illnessDetails[illness].description + "</div>");
                legsIllnessContent.append("<div class='illness-detail'>Symptoms: " + illnessDetails[illness].symptoms + "</div>");
                legsIllnessContent.append("<div class='illness-detail'>Image: " + "<img src='" + illnessDetails[illness].image + "' alt='Illness Image'>" + "</div>");

                $("#legsIllnessMenu").css({
                    top: event.pageY,
                    left: event.pageX + 150
                }).fadeIn();

                event.stopPropagation();
            } 
        }
    });
    </script>
</body>
</html>

