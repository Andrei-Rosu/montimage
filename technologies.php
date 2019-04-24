<?php
include "config.php";
include_once "includes/connection.php";
include_once "includes/functions.php"
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
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
<body id="page-top">
<!-- Navbar -->
<?php include ("includes/navbar.php");?>
<!-- END Navbar -->
<!-- Banner Area -->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-left pt-5">
                <P id="banner_products">

                    Keeping up with the latest technology can be difficult at times.<br>
                    Here, at Montimage, not only do we keep up with the newest technology,
                    <br>we invent the newest security technology as attested by our <a href="#"> patents </a><br>

                </P>
            </div>
            <div class="banner_content text-right ">
                <h2>Technology, in touch with tomorrow</h2>
            </div>

        </div>
    </div>

</section>
<!--================End Home Banner Area =================-->

<!--================Offer Area =================-->

<div class="product_area">
    <section id="cyberange">
    <div class="row no-gutters p-5 ">
        <div class="col-md-12 pb-2"><h3 class="common_style line">What is Cyber Range?</h3></div>
        <p class="lead"> A cyber range is a virtual environment used for cyberwarfare training.<br>
            Cyber ranges are also used for cybertechnology development as they can be used as
            scale models for developing large scale applications.<br>
            The word cyber range comes from an analogy with shooting ranges used to test and train fire-arms.</p>
        <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
            <blockquote><h4>How do we use the cyber ranges at Montimage?</h4></blockquote>
            <p>The Montimage Cyber range platform is built to evaluate the security monitoring capabilities based on MMT, Snort or Suricata Intrusion Detection Systems in different contexts (NFV/SDN, IoT, e-health, transport, etc.).<br>
                It integrates the following features: <br></p>
            <h4>Traffic generators:</h4>
            <p class="pl-4">Different tools are available on the platform to generate network traffic flows in order to cover more than 600 different protocols and applications.<br>
                It is also possible to generate malicious attacks. <br>
                For this purpose, we use 3 types of tools: tcpreply, tomahawk and scapy.</p>

            <blockquote><h4>MMT Monitoring solution:</h4>
                <p class="pl-2"> MMT (Montimage Monitoring Tool) main attributes:<br>

                <p class="pl-4">- Real-time and historical views.<br>
                    - Advanced rules engine<br>
                    - Correlation between network and application events<br>
                    - Detection of performance, operational and security incidents<br>
                    - Easy-to-use customizable user interface<br>
                </p>
                <p class="pl-2"><br>The tool is easy to extend to add new protocols/applications and/or new security rules to analyse.</p>


                <blockquote><h4>High bandwidth management:</h4>
                    <p class="pl-4"> It is possible to generate up to 10 Gbits/s network traffic.<br>
                        The necessary hardware is available to manage this kind of experiments.<br>
                    </p>

                    <blockquote><h4>Using virtualization:</h4>
                        <p class="pl-4"> It is possible to use Openstack and create different network topologies and
                            benefit from the concepts of NFV/SDN to build different use cases according to the user requirements.
                        </p>
        </div>
    </div>
    </section>
    <section id="blockchain">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is blockchain?</h3></div>
            <p class="lead">
                 Blockchain is an information storage and transmission technology without a centralized control organism.<br>
                Technically, it is a distributed database whose information sent by users and internal links to the database
                are checked and grouped at regular time intervals in blocks, the whole being secured by cryptography, and thus forming a string.<br>
                The most prominent application is in the cryptocurrency field, where Bitcoin is the best-known example.<br></p>
                <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>How does Montimage relate to blockchain?</h4></blockquote>
                <p>Although apparently a "secure" technology just as any other man made invention, blockchain is vulnerable to malicious intents. <br></p>
                <h4>Real and envisaged scenarios:</h4>
                <p class="pl-4">On December 2017, Nice Hash, one of the largest Bitcoin marketplaces got hacked, resulting in 60 million dollars in losses.<br>
                    It raised an important issue of blockchain operations safety.<br></p>
                <p class="pl-2">Montimage is exploring the security of blockchains and intends to find way to monitor its internals.<br>
                    Decentralized systems might not be as secure as they seem. </p><br>

            <p class="pl-4">As a hypothetical situation, 51&#37 attack is too big of an issue to be left un-investigated . <br>
                Imagine the situation in which one person or a group of people could concentrate in their hands 51&#37 of the "mining" power.<br>
                This owner automatically becomes the game changer, acquiring possibilities to pass transactions with that same coin twice, or as many times as needed.<br>
                This breaks all the rules of the game and puts the reason of blockchain existence under a question mark.</p>
            <p class="pl-2">At Montimage we try to explore all the possibilities and solve the problems before they become critical issues. </p><br>


            </div>
    </section>
    <section id="artificial">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is the Artificial Intelligence ?</h3></div>
            <p class="lead">
                Artificial intelligence (AI) is an area of computer science which focuses on the creation of machines or
                computer programs that imitate the functions we usually associate with human minds. <br>
                Among these functions, the most researched are "problem solving" and "learning".<br>
                However, the definition of artificial intelligence is continuously evolving.<br>
                For example, optical character recognition (OCR), a huge advance in the field a few years ago, nowadays
                is considered as being a routine technology, thus completely out of the artificial intelligence field.</p>
                <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                    <blockquote><h4>How does Montimage use the Artificial Intelligence?</h4></blockquote>
            <p>The classification of the network traffic requires Artificial Intelligence and Machine Learning algorithms
                for the results to be as close to 0 error as possible. <br>
                We use Artificial Intelligence also for the statistical and behavioural analysis in order to discover patterns that are un-discernible even for humans.<br>
                The differentiation of normal and abnormal events in the use of a network requires the use of Machine Learning.  <br></p>
            <h4>Examples of artificial intelligence use:</h4>
            <p class="pl-4">For instance, Bayesian networks are used for detecting DoS attacks.<br></p>
            <p class="pl-4">We use the most advanced Data Science techniques and algorithms based on A.I. for classifying encrypted traffic. </p><br>
                    <p class="pl-2"></p>
                </div>
        </div>
    </section>
    <section id="managing">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What are the evasion techniques?</h3></div>
            <p class="lead">
                Evasion techniques are techniques used by cyber-attackers to evade detection by security applications
                (e.g., Intrusion Detection Systems, Intrusion Prevention Systems, Firewalls, Malware scanners).<br>
                They can be used for rendering the security applications ineffective or transmitting surreptitious
                information (e.g., for Command and Control of botnets). <br></p>
            <p class="pl-2">They rely on two main vulnerabilities:<br>
                - Impedance Incompatibility: The problem of different interpretations of the same network traffic by the Probe and by the target device of the traffic.<br>
                - Denial of Services (DoS): The creation of a huge workload for security tools to reduce their performance and/or accuracy.<br></p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>How do we address at Montimage the evasion techniques?</h4></blockquote>
                <p>We detect the evasions by differentiating it from normal traffic.<br>
                    We implement the detection of known attacks on higher Open Systems Interconnection (OSI) abstraction
                    layers even in case of IP fragmentation or any other type of evasion technique.<br>
                    We design and implement solutions that are able to avoid the loss of performance of the Deep Packet Inspection (DPI) engine. <br>
                </p>
            </div>
        </div>
    </section>
    <section id="dpi">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is Deep Packet Inspection?</h3></div>
            <p class="lead">Deep packet inspection (DPI) is a way of processing data.The detailed inspection of the packets
                of data being sent over a computer network allows decision taking regarding the traffic. Blocking, re-routing
                , or logging the flow of data are just a few of the multiple uses of Deep Packet Inspection.
                There are multiple ways to acquire packets for deep packet inspection.
                In order to ensure an optimal flow of data, at Montimage we use port mirroring in order to capture and
                analyse the data.</p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>How do we use Deep Packet Inspection ?</h4></blockquote>
                <p>MMT-Extract analyses network traffic using Deep Packet and Flow Inspection (DPI/DFI) techniques <br>
                    in order to extract hundreds of network and application based events.<br>
                    We measure network and per-application parameters and then analyse the data in order to correlate <br>
                    it with application events in order to detect performance, operational and security incidents.<br>
                </p>
            </div>
        </div>
    </section>
    <section id="analysis">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is the analysis of encrypted traffic?</h3></div>
            <p class="lead">
                Encrypted tunnels (via SSL / TLS, SSH ...) are becoming more widespread and simpler to set up. <br>
                They can be used by cyber attackers for performing data exfiltration, botnet command & control and many others.
                The usual methods of detection  - DPI, payload analysis become ineffective when confronted with the data being encrypted before transmission. <br></p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>Thus, Montimage has introduced new techniques in its tools to detect, analyse and eventually block
                        surreptitious network tunnels.</h4></blockquote>
                <p class="pl-4">These techniques include:<br>
                    - Artificial Intelligence,<br>
                    - Machine Learning,<br>
                    - Data Science,<br>
                    - Statistical Analysis,<br>
                    - Behaviour Analysis,<br>
                    - Multi-source data correlation
                </p>
                <p class="pl-2">
                    In this way it is possible to differentiate good from bad network traffic even when it is encrypted.<br>
                    In some cases, other techniques can be used such as: acting as man-in-the-middle for intercepting the network exchanges,<br>
                    or using the endpoint’s certificates or keys.<br>
                    The last aforementioned techniques are basically only useful for monitoring on the server or client sides.<br>
                </p>
            </div>
        </div>

    </section>
    <section id="behaviour">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is network behaviour analysis?</h3></div>
            <p class="lead">
                In order to detect threats the big majority of security monitoring systems use a signature-based approach .<br>
                The "signatures" of previously identified security threats are kept in databases.<br>
                The network security systems in general scan the traffic on the network and look for patterns in the packets which match the signatures already in the database.<br>
                In a variety of situations, the signature based scan can be effective, but it has limitations:<br>
                - It cannot detect new malicious signatures as such;
                - They are completely ineffective against the encrypted traffic</p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>Montimage's approach ?</h4></blockquote>
                <p>Through behavioural analysis we implement a detection method based on a "flow" model of the monitored
                    traffic in order to highlight any anomaly compared to this model.<br>
                    The characterization of flows aims to obtain a mathematical representation of flows as close
                    as possible to reality in order to minimize detection errors when the observation moves away from the model.<br> </p>
                <h4>Real and envisaged scenarios:</h4>
                <p class="pl-4">This characterization is mainly based on multicriteria statistical models considering flows,
                    protocols, times in the day, etc. Based on this definition, Montimage has developed, as an extension
                    of MMT, a behavioural error detection technique considering the output of the Montimage’s DPI engine.
                    This resulted in the new capability (called MMT-Behaviour) that compares current metadata (in relation
                    to current flows) with a sliding window of historical metadata whose scope is defined through external
                    rules called "Behavioural analysis rules". This analysis includes user profile change detection as well
                    as the detection of abrupt changes in use of a protocol or application.
                    <br></p>

                <p class="pl-2">Our network behavioural analysis program tracks in real-time network characteristics and triggers an
                    alarm if it detects a strange event or trend that could indicate the presence of a threat.</p><br>


            </div>
        </div>
    </section>
    <section id="slas">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is a security service level agreement?</h3></div>
            <p class="lead">
                The adoption of the cloud computing paradigm has opened new business possibilities thanks to the virtual
                availability of huge computing resources at a low cost.<br>
                However, at the same time, many potential users are still reluctant to move their critical data and
                applications to commercial clouds, due to a substantial lack of trust in providers for what regards security.<br>
                Currently in fact, cloud security is still considered one of the factors inhibiting the widespread adoption of the cloud computing paradigm.<br>
            </p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>What can we do about it?</h4></blockquote>
                <p>The need for guarantees, not only regarding security, has urged the introduction of Service Level
                    Agreements (SLAs) in the cloud context.<br>
                    SLAs are formal contracts documenting the features of delivered services and related performance
                    and Quality of Service (QoS) expectations, the so called Service Level Objectives (SLOs).<br>
                    Moreover, they explicitly take into account responsibilities, obligations, service pricing and
                    penalties in case of agreement violations.<br>
                   <br> </p>
                <h4>Our aproach:</h4>
                <p class="pl-4"> Montimage designed and implemented an assurance platform that allows to check that Security SLAs are fully respected.<br>
                    We institute periodical or real-time checks during runtime and notify the different stakeholders about
                    any foreseen incident or detected flaw in order to maximize the trust on cloud based environments.
                    <br></p>

                <p class="pl-2">As a clear example: if you are guaranteed by your cloud provider an up-time of 99.9%,
                we ensure the down-time is lower than 0.1%. If the contrary is shown by our monitoring tool, we provide you
                with the data necessary in order to enforce the service level agreement.</p><br>
            </div>
        </div>
    </section>
    <section id="apt">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is an Advanced Persistent Threat?</h3></div>
            <p class="lead">
                Detecting abnormal or malicious network activity is very challenging.<br>
                Today, the most often used techniques are based on the detection of known attacks using signatures and
                identification of behaviour anomalies (e.g., as done by Intrusion Detection Systems),
                but 0-day and Advanced Persistent Threats (APTs) are not accurately detected by existing techniques.<br>
                The Advanced Persistent Threats are complex hacking processes carried out by attackers usually targeting a specific entity.<br>
                The term "persistent" is used to emphasize that it is often based on a Command & Control system that
                continually monitors and exfiltrates data from the targeted system.<br>
            </p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>What is the current approach to this problem?</h4></blockquote>
                <p>Solutions currently available in the market or in research involve the analysis of network traffic,
                    email content and downloaded files to identify malicious activity and behaviour, viruses & malware. <br>
                    For the most part, they depend on known threats to be blocked. <br>
                    This way of proceeding has shown its limits and the number of new malware variants that appear each
                    day is alarming (more than 360.000 new variants per day  ).<br>
                    <br> </p>
                <h4>Our solution:</h4>
                <p class="pl-4">  Montimage proposes a security solution that surveys user and computer system activity and correlates it
                    with the network traffic events. <br>
                    This is essential to be able to automate the process of separating
                    legitimate network traffic from unnecessary, abnormal or malicious network traffic that needs to be blocked.
                    <br></p>
            </div>
        </div>
    </section>
    <section id="bandwidth">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is high bandwidth network analysis?</h3></div>
            <p class="lead">
                High bandwidth network analysis is the process of recording, reviewing and analyzing network traffic for
                networks exceeding a traffic of 10 G/s. <br>
                The high bandwidth network analysis is used to convey information about performance, security and
                general network operations and management. <br>
                Nowadays, with video streaming taking a more and more important place in the total of communications over the networks,
                 the utility of a tool capable of analyzing massive amounts of traffic in real-time is undeniable.<br>
            </p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>Our tool: </h4></blockquote>
                <p>Our bandwidth monitors collect, monitor, and analyze network traffic in real time.<br>
                    We have tested our solution in real life situation with a traffic of up to 35 G/s with exceedingly good results.<br>
                    Through the monitoring we can:</p>
                <p>- Capture the data,<br></p>
                <p>- Extract the events,<br></p>
                <p>- Make a statistics collection,<br></p>
                <p>- Analyse the traffic,<br></p>
                <p>- Generate reports, etc.<br></p>

            </div>
        </div>
    </section>
    <section id="cloud">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is cloud computing?</h3></div>
            <p class="lead">
                Cloud computing is the availability of computer system resources, especially data storage and computing
                power, on demand, without direct active management by the user.<br>
                The term is generally used to describe data centers available to many users over the Internet. <br>
                Large clouds, predominant today, often have functions distributed over multiple locations from central servers.<br>
                Existing monitoring solutions to assess security and performance can still be used in virtualized environments
                and mainly for multi-cloud based applications.<br>
                Nevertheless, existing solutions need to be adapted and correctly controlled since they were meant mostly for
                physical and not virtual systems and boundaries.<br>
                The main inconvenient is that these solutions do not allow fine-grained analysis adapted to the needs of
                cloud and virtualized networks.<br>
            </p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>The current approaches :</h4></blockquote>
                <p>
                    Solutions such as Ceilometer, a monitoring solution for OpenStack, provide efficient collection of metering data
                    in terms of CPU and network costs.<br>
                    However, it is focused on creating a unique contact point for billing systems to acquire all of the
                    measurements they need, and it is not oriented to perform any action to try to improve
                    the metrics that it monitors. <br>
                    Furthermore, security issues are not considered.<br>
                    StackTach is another example oriented to billing issues that monitors performance and audits the
                    OpenStack’s Nova component.<br>
                    A recent project from OPNFV, named Doctor, is focused on the creation of a fault management and
                    maintenance framework for high availability of network services on top of virtualized infrastructures.
                    <br> </p>
                <h4>How do we tackle this problem at Montimage?:</h4>
                <p class="pl-4">The lack of visibility and controls on internal virtual networks, and the heterogeneity of devices used make
                    many performance assessment applications ineffective.<br>
                    On one hand, the impact of virtualization on these technologies needs to be assessed.<br>
                    For instance, QoS monitoring applications need to be able to monitor virtual connections. <br>
                    On the other hand, these technologies need to cope with ever-changing contexts and trade-offs between
                    the monitoring costs and the benefits involved. <br>
                    Here, virtualization of application component facilitates changes, making it necessary
                    for monitoring applications to keep up with this dynamicity.
                    <br></p>

                <p class="pl-2">Montimage provides an advanced security monitoring solution for multi-cloud applications.<br>
                    This solution combines events coming for the network side, others from the applications and systems logs running
                    if the cloud infrastructures to be able to detect advanced security threats in the multi-cloud based environment.<br></p>
            </div>
        </div>
    </section>
    <section id="edge">
        <div class="row no-gutters p-5 ">
            <div class="col-md-12 pb-2"><h3>What is fog computing ?</h3>:</h3></div>
                <p class="lead">Same as cloud computing, fog computing provide storage, applications, and data to end-users.<br>
                    The difference resides in the fact that while cloud computing is concentrated in data centers,<br>
                    fog computing has a closer proximity to end-users and bigger geographical distribution.<br>
                    Also known as edge computing or fogging, fog computing facilitates the operation of compute, storage, and
                    networking services between end devices and cloud computing data centers.<br>
                    Fog computing is a medium weight and intermediate level of computing power.<br>
                    Rather than a substitute, fog computing often serves as a complement to cloud computing.<br>
                </p>
            <div class="col-md-10 offset-2 no-gutters pb-5 pt-5">
                <blockquote><h4>The current approaches :</h4></blockquote>
                <p>
                    Edge/Fog computing provides the missing link in the cloud-to-thing continuum.<br>
                    It is a critical architecture for today’s connected world as it enables low latency, reliable operation,
                    and removes the requirement for persistent cloud connectivity to address emerging use cases in
                    Internet of Things (IoT), 5G, Artificial Intelligence (AI), Virtual Reality and Tactile Internet applications.
                    Edge/Fog architectures selectively move compute, storage, communication, control, and decision making
                    closer to the network edge where data is being generated and used. <br>
                    This solves the limitations in current infrastructure to enable mission-critical, data-dense use cases.<br>
                <h4>Montimage's work on fog and edge technologies:</h4>
                <p class="pl-4">Montimage offers an EPC-in-a-box that is a new 4G/5G-ready Evolved Packet Core solution
                    jointly commercialised by Montimage and Cumucore (https://cumucore.com/).<br>
                    This solution allows to dynamically adapt to the network/application requirement to add more
                    computation capabilities the nearest to the end users devices.
                    <br></p>
            </div>
            </div>
    </section>

    <?php include ("includes/bottom.php");?>
</body>
</html>

