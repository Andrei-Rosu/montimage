<?php
include "config.php";
include_once "includes/connection.php";
include_once "includes/functions.php"
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['title'] ?></title>
    <meta name="description" content="Get to know the team behind the network security products ! " />
    <meta name="keywords" content="network, security, french, réseau, sécurité, française," />
    <meta name="author" content="Andrei Rosu" />
    <link rel="shortcut icon" href="images/favicon.png">



    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css" />


    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--[if lt IE 9]>
    <style>
        .content{
            height: auto;
            margin: 0;
        }
        .content div {
            position: relative;
        }
    </style>
    <![endif]-->
</head>
<body >
<!-- Navbar -->

<?php include ("includes/navbar.php");?>
<!-- END Navbar -->
<!-- Banner Area -->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center ">
                <h2>Our products never sleep.</h2>
            </div>
            <div class="banner_content text-left pt-5">
                <P id="banner_products">
                    The Montimage product portfolio consists of best-in-class network security technology.<br>
                    We are constantly developing and improving our products.<br>
                    Our team is always here in order to implement innovation to stay ahead of the malicious intents.<br>
                </P>

            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Offer Area =================-->
<div class="product_area">
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>MMT - box</h3></div>
        <div class="col-md-2  offset-3 no-gutters"><img class="img-fluid img-responsive" src="images/MMT-box.png" alt="" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">
            <h4>An industrial-level solution to manage networks at an unbeatable price</h4>
            <p>Analyze how your Internet connection is used.<br>
                - Block certain types of content (sites, applications, social networks).<br>
                - Allow applications and services in your network.<br>
                - Block ads before they reach your device.<br>
                - Establish full control on all your devices.<br>
                and more features being developed as you read these lines...</p>
        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg">MMT-box details</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MMT-box in detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>
                            <li>
                                The software embedded in MMT-Box is based on the Montimage Monitoring Tool.
                            </li>
                            <li>
                                This tool is capable of efficiently and effectively classifying and analyzing
                                gigabits of data per second, offering network statistics and detecting security
                                issues in an on-demand basis.
                            </li>
                            <li>
                                For MMT-Box, this technology has been specially tailored for home users,
                                optimizing the analysis and classifications techniques to offer a simple,
                                yet reliable and powerful monitoring and management network solution.
                            </li>
                        </ul>
                        <ul>

                            <li>
                                <h3>Network Statistics</h3>
                            </li>
                            <ul>
                                <li>
                                    MMT-Box uses advanced monitoring techniques to analyze the network flows.
                                    It will actively analyze the amount of data exchanged,
                                    what devices are the origin of the communications, what are the destinations,
                                    and what type of content is being transferred.
                                </li>
                                <li>
                                    All this information is collected passively on the fly, without impacting the connected
                                    devices.
                                </li>
                                <li>
                                    Once collected, this information is aggregated in the same box
                                    (your information never leaves your box), and is displayed in the web-based interface.
                                </li>
                            </ul>


                            <li>
                                <h3>Blocking and allowing content, sites and applications</h3>
                            </li>

                            <ul>
                                <li>The technology embedded in MMT-Box continuously analyses the data being transferred,
                                    allowing the classification of the traffic.
                                </li>
                                <li>
                                    In this sense, MMT-Box also identifies the type of the content,
                                    what site is being accessed, and the type of application used.
                                </li>
                                <li>
                                    This data is part of the network statistics, and it represents crucial information used
                                    when defining the allowed or blocked content types.
                                </li>
                            </ul>
                            <li>
                                <h3>Ads-removal</h3>
                            </li>
                            <ul>
                                <li>
                                    Since MMT-Box is always analyzing your network data, it is capable of identifying addresses
                                    that deliver ads.
                                </li>
                                <li>
                                    Using this technology, MMT-Box is capable of identifying ads and effectively blocking them,
                                    allowing you a more pleasant navigation experience.
                                </li>
                            </ul>
                            <li>
                                <h3>Parental Control Mode</h3>
                            </li>
                            <ul>
                                <li>Last but not least, the embedded monitoring technology allows you to set parental
                                    control rules, that are actively enforced by MMT-Box.
                                </li>
                                <li>The rules use the same information actively extracted by the MMT-Box, offering you
                                    the capability to manage:</li>
                                <ul>
                                    <li>The content being accessed.</li>
                                    <li>The sites being accessed.</li>
                                    <li>The applications in use</li>
                                    <li>The time slots an application, content or application is allowed or not.</li>
                                </ul>
                            </ul>
                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>EPC-in-a-box</h3></div>
        <div class="col-md-2 offset-3 no-gutters"><img class="img-responsive img-fluid" src="images/EPC.png" alt="" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">
            <h4>An appliance that allows the instant deployment of a core network</h4>
            <p>Create 4G and 5G ready LTE networks on-the-go<br>
                - Fast deployment in 5 minutes;<br>
                - IoT ready network infrastructure (slicing, efficiency);<br>
                - Reliable and robust core for emergency and safety networks;<br>
                - Future proof with extensions to become 5G core.<br>
                Integrated with software-defined networking and network function virtualization;</p>
        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg2" data-whatever="EPC">EPC-in-a-box details</button>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5 text-left">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EPC in detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>
                            <li>
                                EPC-in-a-box is a new 4G/5G-ready Evolved Packet Core solution jointly commercialised by
                                Montimage and <a href="https://cumucore.com/">Cumucore</a>
                            </li>
                        </ul>
                        <ul>

                            <li>
                                <h3>Network monitoring features developed by Montimage:</h3>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        Intelligent distributed monitoring agents;
                                    </li>
                                    <li>
                                        Fine-grained and configurable network visibility;
                                    </li>
                                    <li>
                                        Security and performance monitoring based on DPI and machine learning;
                                    </li>
                                    <li>Automated management and control;</li>
                                    <li>Customizable dashboards to define new collected statistics and configure new views or customize a large list of predefined ones;</li>
                                    <li>Dynamically updated topology: information, statistics, configuration of eNodeBs, MMEs and UEs.</li>
                                </ul>
                            </li>


                            <li>
                                <h3>Network core features developed by Cumucore:</h3>
                            </li>
                            <li>

                                <ul>
                                    <li>Flexible, agile, scalable 4G and 5G-ready core;
                                    </li>
                                    <li>
                                        Reduce high upfront investments in the core;
                                    </li>
                                    <li>
                                        Pay as you grow based on actual used capacity;
                                    </li>
                                    <li>
                                        Reduce OPEX due to better automation and more optimized network;
                                    </li>
                                    <li>
                                        Improve operator ARPU by enabling personalized services to their customers;
                                    </li>
                                    <li>

                                        <strong>Integration with optimized services; caching, content delivery, IPTV and OTT services:</strong>
                                        <ul>
                                            <li>
                                                Traffic savings in packet core of up to 40%;
                                            </li>
                                            <li>
                                                End-to-end latency reduced by 60%.
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>MMT - DPI</h3></div>
        <div class="col-md-2  offset-3 no-gutters"><img class="img-fluid img-responsive" src="images/MMT-DPI.png" alt="" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">

            <p>MMT-DPI is a state-of-the-art network performance monitoring and operation troubleshooting tool.<br></p>
            <h4>Main attributes:</h4>
            <p>
                - Real-time and historical views.<br>
                - Advanced rules engine<br>
                - Correlation between network and application events<br>
                - Detection of performance, operational and security incidents<br>
                - Easy-to-use customizable user interface<br>
        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg">MMT-DPI highlights</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MMT-DPI</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>
                            <li>
                                <h3>MMT-DPI is a monitoring solution that combines:</h3>
                            </li>

                            <li>
                                <ul>
                                    <li> - Data capture,</li>
                                    <li> - Filtering,</li>
                                    <li> - Storage,</li>
                                    <li> - Events extraction,</li>
                                    <li> - Statistics collection,</li>
                                    <li> - Traffic analysis,</li>
                                    <li> - Report generation,</li>
                                    <li> - Network, application, flow and user-level visibility,</li>
                                </ul>
                            </li>

                        </ul>
                        <ul>
                            <li>
                                <h3> MMT - DPI Overview</h3>
                            </li>
                            <li>MMT is composed of three complementary, yet independent, modules: <hr></li>
                            <li>
                                <ul>
                                    <li>
                                        <h3>MMT-Extract: </h3>
                                        The core packet processing module, it is a C library that analyses network traffic
                                        using Deep Packet and Flow Inspection (DPI/DFI) techniques in order to extract
                                        hundreds of network and application based events, measure network and
                                        per-application QoS/QoE parameters and KPIs.
                                        <hr>
                                    </li>

                                    <li>
                                        <h3>MMT-Sec: </h3>
                                        An advanced rule engine that analyses and correlates network and application events
                                        to detect performance, operational and security incidents. It is powered with
                                        self-learning capabilities (both supervised and unsupervised) to derive the baseline
                                        network and application parameters for dynamic threshold based analysis
                                        and analysis of encrypted flows.
                                        <hr>
                                    </li>

                                    <li>
                                        <h3>MMT-Operator: </h3>
                                        Collects and aggregates extracted data, generates network and application statistics,
                                        and presents them via a graphical user interface. MMT-Operator is customizable:
                                        the user can define new statistics to be collected and configure new views or
                                        customize the large list of predefined ones.
                                        <hr>
                                    </li>
                                </ul>
                            </li>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>MMT Load Balancer</h3></div>
        <div class="col-md-2 offset-3 no-gutters"><img class="img-responsive img-fluid" src="images/MMT-LB.png" alt="" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">
            <h4>Our network load balancer or network traffic splitter.</h4>
            <p>It's main use is to separate network traffic according to the traffic’s protocols or applications.<br>
                - Separates the traffic, while respecting the sessions (i.e., sticky sessions),<br>
                - Allows for instance analysing each part of the traffic <br>
                - Uses disjoint security verification rules. <br>
                - Improves the scalability of the analysis with respect to the amount of traffic and the number of rules used.<br>
        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg2" data-whatever="EPC">MMT-LB highlights</button>

            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5 text-left">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MMT - LB</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>

                            <li>
                                <h3>MMT-LB overview:</h3>
                            </li>
                            <li>
                                <ul>

                                    <li>
                                        It uses <a href="https://www.dpdk.org/">Data Plane Development Kit </a>
                                        for the capturing of the network packets of high bandwidth network interfaces (e.g. 10Gbps NICs).
                                        A <a href="ttps://www.tcpdump.org/" >libPCAP</a> version is also available.
                                    </li>
                                    <li>
                                        DPDK’s symétric hash (called sym_hash) is programmed with MMT’s own algorithm
                                        to assure that the sessions are respected.
                                    </li>
                                    <li>
                                        Each execution thread manages the complete processing starting from the packet capture,
                                        to the classification by the MMT-DPI module, and ending with the redirection of the traffic
                                        to the appropriate network interface. In other words, each processing core
                                        will take the packets from one or more Rx queues of the input NICs,
                                        classify the packets, and redirect them to the appropriate Tx queues of the output NICs.
                                    </li>
                                    <li>For dealing with 10/20/40 Gbps traffic bandwidth, MMT-LB is designed to work
                                        best with a server with 16 or more processing cores and with 16 to 22 Rx queues
                                        made available by the NIC’s DPDK.
                                    </li>

                                </ul>
                            </li>


                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5 text-left">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MMT - LB</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>

                            <li>
                                <h3>MMT-LB overview:</h3>
                            </li>
                            <li>
                                <ul>

                                    <li>
                                        It uses <a href="https://www.dpdk.org/">Data Plane Development Kit </a>
                                        for the capturing of the network packets of high bandwidth network interfaces (e.g. 10Gbps NICs).
                                        A <a href="ttps://www.tcpdump.org/" >libPCAP</a> version is also available.
                                    </li>
                                    <li>
                                        DPDK’s symétric hash (called sym_hash) is programmed with MMT’s own algorithm
                                        to assure that the sessions are respected.
                                    </li>
                                    <li>
                                        Each execution thread manages the complete processing starting from the packet capture,
                                        to the classification by the MMT-DPI module, and ending with the redirection of the traffic
                                        to the appropriate network interface. In other words, each processing core
                                        will take the packets from one or more Rx queues of the input NICs,
                                        classify the packets, and redirect them to the appropriate Tx queues of the output NICs.
                                    </li>
                                    <li>For dealing with 10/20/40 Gbps traffic bandwidth, MMT-LB is designed to work
                                        best with a server with 16 or more processing cores and with 16 to 22 Rx queues
                                        made available by the NIC’s DPDK.
                                    </li>

                                </ul>
                            </li>


                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters p-5">
        <div class="col-md-12 pb-2"><h3>MMT-APS:</h3></div>
        <div class="col-md-2 offset-3 no-gutters"><img class="img-responsive img-fluid" src="images/MMT-APS.png" alt="MMT-APS.png" ></div>
        <div class="col-md-6 offset-1 no-gutters pb-5">
            <h4>MMT-APS:
                Protecting endpoint devices from Advanced Persistent Threats and 0-day attacks</h4>
            <p>MMT-APS is a new game-changing solution.<br>
                - we provide a very novel way to deal with Advanced Persistent Threats<br>
                - detecting and blocking of 0-day attacks <br>
                - patented technique that allows separating legitimate network traffic from malicious traffic<br>

        </div>
        <div class="container">
            <!-- Large modal -->
            <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg3" data-whatever="EPC">MMT-APS highlights</button>

            <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5 text-left">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">MMT - APS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <ul>

                            <li>
                                <h3>MMT-APS overview:</h3>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        Detecting abnormal or malicious network activity is very challenging.
                                    </li>
                                    <li>
                                        Today, the techniques used are mainly based on the detection of known attack
                                        signatures and behaviour anomalies - Intrusion Detection Systems.
                                        0-day Advanced Persistent Threats are not detected in useful time by existing techniques.
                                        These solutions depend on known threats that are blocked.
                                    </li>
                                    <li>
                                        Our solution monitors user and computer system activity to correlate it with the
                                        network traffic events that allows to exhaustively separate legitimate from
                                        abnormal or unwanted traffic.
                                        This is done by enabling the analysis and correlation of activity in the user
                                        devices (activity of the user, system and installed applications) with the
                                        network traffic activity to determine its origin.
                                    </li>
                                    <li>This allows protecting the user device connected to the network by blocking all
                                        network traffic coming in and going out that has not been initiated or authorised
                                        by the user, the system or the applications performing their normal activities.
                                    </li>

                                </ul>
                            </li>


                        </ul>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 p-5">
        <a class="col-md-4 offset-md-4 primary_btn line align-self-end " href="technologies.php">Our technologies</a>
    </div>
    <?php include "includes/bottom.php";?>
</div>
</body>
</html>






