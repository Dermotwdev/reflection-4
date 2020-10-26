<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- css animate styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!-- Accordion stylsheet -->
        <link rel="stylesheet" href="js/material-design-expansion-panel/src/matd_expandlist.css">
        <!-- General website styles -->
        <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
        <!-- Contact page styles -->
        <link rel="stylesheet" href="css/contact-page-styles.css?<?php echo time(); ?>">
        <title> Contact Us | Netmatters | Full Service Digital Agency | Norwich, Norfolk | ... </title>
    </head>
    <body>
    <?php require_once __DIR__ . '/inc/cookies.php' ?> 
    <div class="page">
        <div class="page-container">
            <div id="page-content">
            <?php include_once __DIR__ . '/inc/header.php'; ?>
            <main>
                <div class="nav-history hide-sm">
                    <ul class="nav-path">
                        <li><a><strong>Home</strong></a></li>
                        <li>How Can We Help You?</li>
                    </ul>
                </div>
                <div class="contact-message">
                    <h2>How Can We Help You?</h2>
                </div>
                <div class="contact-form-container">
                    <div class="contact-top">
                        <div class="contact-dtls-section">
                            <strong>Call us on:</strong>
                            <a href="tel:01603704020">01603 70 40 20</a>
                        </div> 
                        <div class="contact-dtls-section">
                            <strong>Email us at:</strong>
                            <a href="emailto:sales@netmatters.com">sales@netmatters.com</a>
                        </div> 
                        <div class="contact-dtls-section">
                            <strong>Call us at our Gorleston Branch on:</strong>
                            <a href="tel:01493603204">01493 603204</a>
                        </div>
                        <div class="contact-dtls-section hours">
                            <strong>Business hours:</strong>
                            <strong>Monday - Friday 07:00 - 18:00</strong>
                        </div>
                        <div class="accordion">
                            <div id="question">
                                <!-- <p>Out Of Hours IT Support</p> -->
                            </div>
                            <div class="answer">
                                
                            </div>
                        </div>
                    </div>
                    <div class="contact-bottom">
                        <?php
                        if (isset($_GET['name'])) {
                            $name = $_GET['name'];
                        } if (isset($_GET['email'])) {
                            $email = $_GET['email'];
                        } if (isset($_GET['phone'])) {
                            $phone = $_GET['phone'];
                        } if (isset($_GET['subject'])) {
                            $subject = $_GET['subject'];
                        } if (isset($_GET['message'])) {
                            $message = $_GET['message'];
                        }
                        if (isset($_GET['box'])) {
                            echo $_GET['box'];
                            $optin = $_GET['box'];
                        } else {
                            $optin = false;
                        }
                        if(! isset($_GET['submit'])) {
                            echo 
                        "<form action=\"inc/submit.php\" method=\"POST\">
                            <div class=\"form-group\">
                                <label for=\"name\" class=\"required\">Your Name</label>
                                <input type=\"text\" id=\"name\" name=\"name\""; if(isset($name) && $name !== 'empty') echo "value=\"$name\""; echo ">";
                            if (isset($_GET['name'])) {
                                if ($_GET['name'] == 'empty') { 
                                  echo "<div class=\"tooltip-error\">
                                            Name field is empty
                                        </div>"; 
                                }
                            }
                              echo "<label for=\"email\" class=\"required\">Your Email</label>
                                <input type=\"email\" id=\"email\" name=\"email\" "; if(isset($email) && $email !== 'empty' && $email !== 'invalid') echo "value=\"$email\""; echo ">";
                            if (isset($_GET['email'])) {
                                if ($_GET['email'] == 'empty') { 
                                    echo "<div class=\"tooltip-error\">
                                              Email field is empty
                                          </div>"; 
                                } elseif ($_GET['email'] == 'invalid') {
                                    echo "<div class=\"tooltip-error\">
                                              Email provided is not a valid format
                                          </div>";
                                }
                            } 
                            echo "</div>
                            <div class=\"form-group\">
                                <label for=\"phone\" class=\"required\">Your Telephone Number</label>
                                <input type=\"text\" id=\"phone\" name=\"phone\""; if(isset($phone) && $phone !== 'empty') echo "value=\"$phone\""; echo ">";
                            if (isset($_GET['phone'])) {
                                if ($_GET['phone'] == 'empty') { 
                                    echo "<div class=\"tooltip-error\">
                                              Phone Number field is empty
                                          </div>"; 
                                }
                            } 

                               echo "<label for=\"subject\" class=\"required\">Subject</label>
                                <input type=\"text\" id=\"subject\" name=\"subject\""; if(isset($subject) && $phone !== 'empty') echo "value=\"$subject\""; echo ">";
                            if (isset($_GET['subject'])) {
                                if ($_GET['subject'] == 'empty') { 
                                    echo "<div class=\"tooltip-error\">
                                              Subject field is empty
                                          </div>"; 
                                }
                            }
                            echo "</div>
                            <div class=\"message-group\">
                                <label for=\"message\" class=\"required\">Message</label>
                                <textarea id=\"message\" name=\"msg\""; if(isset($message) && $message !== 'empty') echo "value=\"$message\""; echo "></textarea>";
                            if (isset($_GET['message'])) {
                                if ($_GET['message'] == 'empty') { 
                                    echo "<div class=\"tooltip-error\">
                                              Message field is empty
                                          </div>"; 
                                } 
                            }
                            echo "</div>
                            <div class=\"privacy-dec\">
                                <input type=\"checkbox\" id=\"marketing-confirm\" name=\"box\" value=\"checked\""; if($optin == true) echo"checked=\"true\"";
                                 echo ">
                                <div class=\"privacy-text\">
                                    <p>Please tick this box if you wish to receive marketing information from us. 
                                        Please see our <a href=\"#\">Privacy Policy</a> for more information on how we use your data</p>
                                </div>
                            </div>
                            <button class=\"btn\" type=\"submit\" name=\"submit\">Send Enquiry</button>
                        </form>";
                        } else if ($_GET['submit'] == 'success') { 
                            echo "<h2>Success</h2>
                                <p>Your message has been submitted.<br>
                                We aim to get back to you within 4 business hours.</p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="map-cards">
                    <div class="wymondham card">
                            <div class="circle">
                            <svg enable-background="new -0.709 -1.23 141.732 141.732" id="Livello_1" version="1.1" viewBox="-0.709 -1.23 141.732 141.732">
                            <g id="Livello_76">
                            <path d="M0,69.023h0.026v-0.025L0,69.023z M136.448,66.373c0-0.77-0.33-1.461-0.854-1.942L72.026,0.836   C71.555,0.336,70.894,0.02,70.157,0v0.095c-0.737,0.018-1.398,0.335-1.869,0.835L4.72,64.521c-0.523,0.479-0.854,1.174-0.854,1.94   c0,1.467,1.188,2.65,2.65,2.65h15.067v12.529v57.629h35.078V98.799c0-1.487,1.203-2.696,2.688-2.696h21.571   c1.49,0,2.697,1.209,2.697,2.696v40.478h35.105v-57.63V69.043v-0.02h15.067C135.262,69.023,136.448,67.838,136.448,66.373    M140.315,69.115l-0.027-0.025v0.025H140.315z"/></g><g id="Livello_1_1_"/>
                            </svg>
                            </div>
                            <h3>Netmatters Office: Wymondham</h3>
                            <div class="divider"></div>
                            <div class="card-address">
                                <p> Netmatters<br>
                                    11 Penfold Drive<br>
                                    Wymondham<br>
                                    Norfolk<br>
                                    NR18 0WZ<br>
                                </p>
                            </div>
                        <div class="map"></div>
                    </div>
                    <div class="gorleston card">
                            <div class="circle">
                            <svg viewBox="0 0 1792 1792">
                            <path d="M1047 996v-4l-24-320q-1-13-11-22.5t-23-9.5h-186q-13 0-23 9.5t-11 22.5l-24 320v4q-1 12 8 20t21 8h244q12 0 21-8t8-20zm759 467q0 73-46 73h-704q13 0 22-9.5t8-22.5l-20-256q-1-13-11-22.5t-23-9.5h-272q-13 0-23 9.5t-11 22.5l-20 256q-1 13 8 22.5t22 9.5h-704q-46 0-46-73 0-54 26-116l417-1044q8-19 26-33t38-14h339q-13 0-23 9.5t-11 22.5l-15 192q-1 14 8 23t22 9h166q13 0 22-9t8-23l-15-192q-1-13-11-22.5t-23-9.5h339q20 0 38 14t26 33l417 1044q26 62 26 116z"/>
                            </svg>
                            </div>
                            <h3>Netmatters Office: Gorleston, Great Yarmouth</h3>
                            <div class="divider"></div>
                            <div class="card-address">
                                <p>Netmatters - Great Yarmouth<br>
                                    Suite F23 Beacon Innovation Centre, Beacon Park<br>
                                    Gorleston, Great Yarmouth<br>
                                    Norfolk<br>
                                    NR31 7RA<br>
                                </p>
                            </div>
                        <div class="map"></div>
                    </div>
                </div>
            </main>
            <?php include_once __DIR__ . '/inc/footer.php'; ?>
            </div>
            <div id="blocker"></div>
        </div>
        <?php include_once __DIR__ . '/inc/sidebar.php'; ?>

        <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" integrity="sha256-HmfY28yh9v2U4HfIXC+0D6HCdWyZI42qjaiCFEJgpo0=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/slick-1.8.1/slick/slick.min.js"></script>
        <script src="js/slick-script.js"></script>
        <script src="js/hamburger-menu-master/script/nav.js"></script>
        <script src="js/Cookies.js"></script>
        <script src="js/jquery.shyheader.js"></script>
        <script src="js/material-design-expansion-panel/src/matd_expandlist.min.js"></script>
        <script>
        $(function () {
            $(".shy-header").shyheader();
        });
        </script>
        <script>
            $('#question').matd_expandlist({
            "list":[
                {"heading":"Out Of Hours IT Support",
                "details":"<p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p><p><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>Sunday 10:00 - 18:00</strong></p><p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>"}
            ]
            });
        </script>
    </body>
<html>