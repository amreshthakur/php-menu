<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page menu by Pipara Academy</title>
    <style>
        /* Reset styles and set default font */
        * {
            font-family: \'Poppins\', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            transition: background-color 0.5s ease;
            background-color: #000;
            color: #fff;
        }

        .big-container p {
            color: #f9f9f9;
            font-size: 20px;
            padding: 5px 10px;
        }

        .sub-container {
            margin: 18px 0 25px -20px;
            color: #fff;
            display: inline;
        }

        .sub-container input {
            display: none;
        }

        .sub-container span {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .sub-container {
                display: block;
                position: relative;
                top: 5px;
                left: 0;
                text-align: center;
            }

            .sub-container p {
                text-decoration: none;
                color: #ffffff;
                transition: color 0.3s ease;
                cursor: pointer;
                font-size: 18px;
                margin: auto 0;
                padding: 15px 20px;
            }

            .sub-container p:hover {
                color: #09f845;
            }

            .sub-container input {
                display: block;
                width: 40px;
                height: 32px;
                margin-left: 80px;

                position: absolute;
                top: -7px;
                left: -5px;
                cursor: pointer;
                opacity: 0;
                z-index: 2;
                -webkit-touch-callout: none;
            }

            .sub-container span {
                display: block;
                width: 33px;
                height: 4px;
                margin-bottom: 5px;
                margin-left: 80px;
                position: relative;
                background: #f5f5f5;
                border-radius: 3px;
                z-index: 1;
                transform-origin: 4px 0px;
                transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
                    background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
                    opacity 0.55s ease;
            }

            .sub-container span:first-child {
                transform-origin: 0% 0%;
            }

            .sub-container span:nth-last-child(2) {
                transform-origin: 0% 100%;
            }

            .sub-container input:checked~span {
                opacity: 1;
                transform: rotate(45deg) translate(-2px, -1px);
                background: #ffffff;
            }

            .sub-container input:checked~span:nth-last-child(3) {
                opacity: 0;
                transform: rotate(0deg) scale(0.2, 0.2);
            }

            .sub-container input:checked~span:nth-last-child(2) {
                transform: rotate(-45deg) translate(0, -1px);
            }

            .sub-container input:checked~h5 {
                transform: none;
            }

            .navbar-lists {
                position: absolute;
                width: 100%;
                margin: 0;
                padding: 0;
                padding-top: 125px;
                background: #000;
                list-style-type: none;
                -webkit-font-smoothing: antialiased;
                transform-origin: 0% 0%;
                transform: translateX(-100%);
                transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
            }

            .navbar-lists {
                padding: 10px 20px;
                font-size: 18px;
                color: #fff;
            }
        }

        #subject-list {
            display: flex;
            color: #09f845;
            text-align: center;
            font-family: \'Arial\', \'Helvetica\', sans-serif;
            font-size: 540px;
        }

        @media screen and (max-width: 600px) {
            #subject-list {
                display: block;
                font-size: 200px;
            }
        }

        .navbar-menubar {
            cursor: pointer;
            position: relative;
            display: block;
        }

        .navbar-menubar::after {
            content: \'\';
            height: 3px;
            background: #09f845;
            position: absolute;
            left: 0;
            bottom: -8px;
            transition: 0.8s;
        }

        .navbar-menubar:hover {
            color: #25ff09;
            font-weight: bold;
        }

        .navbar-menubar.active-link::after {
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            .navbar-menubar::after {
                content: \'\';
                width: 0;
                height: 5px;
                background: #09f845;
                left: 0;
                bottom: -6px;
                transition: 0.5s;
            }
        }

        .tab-contents ul li {
            list-style: none;
            margin: 10px 0;
        }

        .tab-contents ul li span {
            color: #ff004f;
            font-size: 14px;
        }

        .tab-contents {
            display: none;
        }

        .tab-contents.active-tab {
            display: block;
        }

        h3 {
            font-size: 15px;
            line-height: 25px;
            text-align: center;
            letter-spacing: 0.6px;
            word-wrap: break-word;
            margin: 20px;
            border-radius: 1%;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- Start HTML Code About Section -->
    <section>

        <div class="big-container">
            <div class="sub-container">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <h5 class="navbar-lists" id="subject-list">
                    <p class="navbar-menubar active-link" onclick="opentab(\'home\')">Home</p>
                    <hr>
                    <p class="navbar-menubar" onclick="opentab(\'content-us\')">Contact us</p>
                    <hr>
                    <p class="navbar-menubar" onclick="opentab(\'about-us\')">About us</p>
                    <hr>
                    <p class="navbar-menubar" onclick="opentab(\'Affiliating-Marketing\')">List of AI</p>
                    <hr>
                    <p class="navbar-menubar" onclick="opentab(\'Sell-Digital\')">BSC CSIT</p>
                    <hr>
                </h5>
            </div>
            <hr>
            <div class="tab-contents active-tab" id="Social-Media-for-Promotion">
                <h3>Social Media for Promotion &#8595;</h3>
                <ul>
                    <!-- ........................................... -->
                </ul>
            </div>
            <div class="tab-contents" id="Social-Media-for-Earn">
                <h3>Social Media for Earn &#8595;</h3>
                <ul>
                    <!-- ........................................... -->
                </ul>
            </div>
            <div class="tab-contents" id="Professional-websites">
                <h3>Professional Work websites &#8595;</h3>
                <ul>
                    <!-- ........................................... -->
                </ul>
            </div>
            <div class="tab-contents" id="Free-Tools">
                <h3>Free Tools For Youtube &#8595;</h3>
                <ul>
                    <!-- ........................................... -->
                </ul>
            </div>
            <div class="tab-contents" id="Sell-Digital">
                <h3>Sell Digital Product &#8595;</h3>
                <ul>
                    <!-- ........................................... -->
                </ul>
            </div>

            <div class="tab-contents" id="Affiliating-Marketing">
                <h3>Affiliating Marketing link &#8595;</h3>
                <ul>
                    <!-- ........................................... -->
                </ul>
            </div>
        </div>
    </section>
    <script>
        var navbars = document.getElementsByClassName("navbar-menubar");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (navbar of navbars) {
                navbar.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add(\'active-link\');
            document.getElementById(tabname).classList.add("active-tab");
        };
    </script>
</body>

</html>';
?>
