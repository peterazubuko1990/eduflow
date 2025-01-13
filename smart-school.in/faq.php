<!doctype html>
<html lang="en">
<!-- Mirrored from smart-school.in/faq by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 14:27:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<?php include 'header.php'; ?>
<body id="Home" class="about-us" data-spy="scroll"><!-- Navbar -->
<?php include 'navbar.php'; ?>
<div class="wrapper">
    <!--<div class="page-header header-filter" data-parallax="active" style="background-image: url('assets/admin/assets/img/main-bg.jpg');"><div class="container"><div class="row"><div class="col-md-8 col-md-offset-2"><h1 class="title text-uppercase">FAQs</h1></div></div></div></div> -->
    <!--./page-header-->
    <div class="page-header header-filter innerbanner" data-parallax="active">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="topsearch">
                        <form id="new_article_form" method="POST" autocomplete="off"
                              action="https://smart-school.in/home/search" class="article_form">
                            <div class="autocomplete"><input id="myInput" class="subsearchinput" type="text"
                                                             name="keyword"
                                                             placeholder="Enter your search term here...">
                                <button type="submit" class="livesearchbtn btn btn-success btn-round btn-block heibtn"
                                        name="submitSearch" value="submitSearch"><i class="material-icons">search</i>Search
                                </button>
                            </div>
                        </form>
                        <!--<form id="new_article_form" autocomplete="off" action="/action_page.php"><div class="autocomplete" style="width:300px;"><input id="myInput" type="text" name="myCountry" placeholder="Enter your search term here..."></div><input type="submit"></form> -->
                    </div><!--./card--></div><!--./col-md-6--></div><!--./row--></div><!--./container--></div>
    <!--./page-header-->
    <div class="main main-school">
        <section class="spacet35 spaceb35 why radius6r">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-9">
                        <div class="section-header spaceb20"><h1 class="head-title wow fadeInRight animated">Frequently
                                Asked Questions</h1>
                            <div class='breadcrumb2'><a href="index.html"><i class="fa fa-home"></i></a><a
                                        href="#">FAQ</a></div>
                        </div><!--./section-header-->
                        <div class="panel-group faqs" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse1" aria-expanded="true" aria-controls="collapse1"><i
                                                    class="more-less fa fa-plus-circle"></i>Can I use eduflow
                                            without internet on localhost installation?</a></h4></div>
                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading1">
                                    <div class="panel-body">Yes, you can use <strong>eduflow without internet on
                                            localhost installation</strong> (using XAMPP or WAMP) but you will lose the
                                        benefits of some features like -<br/><br/>
                                        <ul>
                                            <li>Email, SMS and Push notification and messaging</li>
                                            <li>Online Payment</li>
                                            <li>YouTube videos</li>
                                        </ul>
                                        <br/>If you are using <strong>eduflow with internet on localhost
                                            installation</strong> then above mentioned features will work.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse2" aria-expanded="true" aria-controls="collapse2"><i
                                                    class="more-less fa fa-plus-circle"></i>Can I use eduflow on
                                            localhost or local LAN network?</a></h4></div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading2">
                                    <div class="panel-body">Yes, you can use eduflow on localhost installation
                                        (using XAMPP or WAMP) and <strong>access it in your local LAN</strong> (Local
                                        Area Network) from other pc in network. How to configure eduflow for local
                                        LAN network please <a
                                                title=" Configure eduflow To Use In Local LAN Network"
                                                href="article/configure-smart-school-to-use-in-local-lan-network.php">check
                                            this article</a>.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse3" aria-expanded="true" aria-controls="collapse3"><i
                                                    class="more-less fa fa-plus-circle"></i>How to enable display error
                                            message?</a></h4></div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading3">
                                    <div class="panel-body">By default display error messages are disabled in Smart
                                        School that is the reason every time if there is any error occurred system is
                                        showing 500 error message. This is due to eduflow environment is set for
                                        production . To enable display error message you should change eduflow
                                        environment from <span
                                                style="color: #e74c3c;"><strong>production</strong> </span>to <span
                                                style="color: #27ae60;"><strong>development</strong></span>.<br/><br/>Please
                                        do the following changes in code files to change environment -<br/><br/>Open
                                        file <span style="color: #3598db;"><strong>\index.php</strong></span> in any
                                        editor carefully from your installation folder and
                                        find<br/><br/><code><strong><span style="color: #e74c3c;">define('ENVIRONMENT', 'production');</span></strong></code><br/><br/>and
                                        change it to<br/><br/><code><span style="color: #27ae60;"><strong>define('ENVIRONMENT', 'development');</strong></span></code><br/><br/><br/>Be
                                        aware that in development mode you may see some errors and deprecation warnings,
                                        for this reason, it&rsquo;s always recommended to set the environment to &ldquo;production&rdquo;
                                        .<br/><br/>
                                        <table style="border-collapse: collapse; width: 650px; height: 30px; background-color: #fef839;"
                                               border="0">
                                            <tbody>
                                            <tr style="height: 72px;">
                                                <td style="width: 615.219px; height: 41px;">
                                                    <div style="text-align: center;"><strong>Do not forget to turn it
                                                            back to production when you have finished the error checking
                                                            or debugging</strong></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse4" aria-expanded="true" aria-controls="collapse4"><i
                                                    class="more-less fa fa-plus-circle"></i>How to find my Envato Market
                                            Purchase Code for an item?</a></h4></div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading4">
                                    <div class="panel-body">To find Envato Market Purchase Code for an item check this
                                        <a title="How to find my Envato Market Purchase Code"
                                           href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-"
                                           target="_blank" rel="noopener">https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code</a>
                                        guide.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading5"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse5" aria-expanded="true" aria-controls="collapse5"><i
                                                    class="more-less fa fa-plus-circle"></i>I have question, where
                                            should I ask?</a></h4></div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading5">
                                    <div class="panel-body">If you have any general questions don't hesitate to contact
                                        us on <strong><span style="color: #3598db;">support@qdocs.in</span></strong> and
                                        for support questions you can open support ticket at <a
                                                title="eduflow support portal" href="http://support.qdocs.in/"
                                                target="_blank" rel="noopener">http://support.qdocs.in</a></div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading6"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse6" aria-expanded="true" aria-controls="collapse6"><i
                                                    class="more-less fa fa-plus-circle"></i>Does eduflow support 3
                                            decimals places?</a></h4></div>
                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading6">
                                    <div class="panel-body">eduflow does <strong>not support</strong> 3 decimals
                                        places for a number or currency amount.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading7"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse7" aria-expanded="true" aria-controls="collapse7"><i
                                                    class="more-less fa fa-plus-circle"></i>How to check what version I
                                            am using?</a></h4></div>
                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading7">
                                    <div class="panel-body">To check eduflow Version, login from superadmin panel
                                        and then go to <strong>System Settings &gt; System Update</strong> link. Here
                                        you can see your current <strong>eduflow Version</strong>.<br/><br/><img
                                                src="assets/article-media/unable-smartschool-version.png"
                                                alt="eduflow version image " width="1360" height="660"/></div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading8"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse8" aria-expanded="true" aria-controls="collapse8"><i
                                                    class="more-less fa fa-plus-circle"></i>What are the server
                                            requirements for installing or running eduflow?</a></h4></div>
                                <div id="collapse8" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading8">
                                    <div class="panel-body">Click <a title=" Server Requirements"
                                                                     href="article/server-requirements.html">here</a> to
                                        read more about the server requirements.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading9"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse9" aria-expanded="true" aria-controls="collapse9"><i
                                                    class="more-less fa fa-plus-circle"></i>Does eduflow support
                                            RTL direction for languages?</a></h4></div>
                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading9">
                                    <div class="panel-body">Yes, eduflow <strong>support RTL</strong> direction for
                                        languages.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading10"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse10" aria-expanded="true" aria-controls="collapse10"><i
                                                    class="more-less fa fa-plus-circle"></i>Is RTL supported on PDF or
                                            exported documents?</a></h4></div>
                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading10">
                                    <div class="panel-body">Unfortunately <strong>not</strong>, the PDF or exported
                                        documents are only <strong>generated in LTR</strong> direction.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading11"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse11" aria-expanded="true" aria-controls="collapse11"><i
                                                    class="more-less fa fa-plus-circle"></i>After adding staff or
                                            student no email is receiving?</a></h4></div>
                                <div id="collapse11" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading11">
                                    <div class="panel-body">After <strong>adding staff or student if no email is
                                            receiving</strong> or <strong>there is no any email send by system</strong>
                                        then your email setting is not configured properly so system is unable to send
                                        any email. To configure email please check <a title="Email Send Not Working"
                                                                                      href="article/email-send-not-working.php">this
                                            article</a>.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading12"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse12" aria-expanded="true" aria-controls="collapse12"><i
                                                    class="more-less fa fa-plus-circle"></i>Can I use eduflow as
                                            SaaS or multi school application?</a></h4></div>
                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading12">
                                    <div class="panel-body">Unfortunately you&nbsp;can&rsquo;t use eduflow as SaaS
                                        or multi school application. Even you can not edit or customize eduflow to
                                        make it SaaS or multi school application due to its licensing terms. Smart
                                        School licenses are single end products, additional information for licenses can
                                        be found <a title="eduflow license"
                                                    href="https://codecanyon.net/licenses/standard" target="_blank"
                                                    rel="noopener">here</a>.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading13"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse13" aria-expanded="true" aria-controls="collapse13"><i
                                                    class="more-less fa fa-plus-circle"></i>Does unicode character for
                                            languages supported in data export of table or datatable?</a></h4></div>
                                <div id="collapse13" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading13">
                                    <div class="panel-body">No, currently unicode characters for non English languages
                                        does not supported in data export from table or datatable.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading14"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse14" aria-expanded="true" aria-controls="collapse14"><i
                                                    class="more-less fa fa-plus-circle"></i>Can I use special character
                                            in eduflow?</a></h4></div>
                                <div id="collapse14" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading14">
                                    <div class="panel-body">In eduflow avoid to enter or using special character
                                        (special character is non-alphabetic and non-numeric like @, #, $, &lt;, %, ^,
                                        &amp;, *, !) for any field like Student, Staff, Income, Expense, Transport,
                                        Custom Field etc, otherwise it may fail PHP or JavaScript processing.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading15"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse15" aria-expanded="true" aria-controls="collapse15"><i
                                                    class="more-less fa fa-plus-circle"></i>How to restrict Teacher to
                                            access only their assigned student data?</a></h4></div>
                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading15">
                                    <div class="panel-body">
                                        <div>For student data access separation there is a Teacher Restricted Mode
                                            feature is available, by default teachers can access all student data but
                                            when Teacher Restricted Mode <strong>(System Settings &gt; General Setting
                                                &gt; Miscellaneous &gt; Teacher Restricted Mode)</strong> is enabled
                                            then teacher can see only their assigned class-section or subject, student
                                            related data for different modules like Exam, Homework, Lesson Plan
                                            etc.<br/><br/><img src="assets/article-media/teacher_restricted_mode.png"
                                                               alt="" width="1366" height="638"/></div>
                                        <div>&nbsp;</div>
                                        <div dir="ltr"><strong>Note:-</strong> please note that if you have assigned
                                            teacher as a class teacher to the class then this teacher will be able to
                                            manage their assigned class related all data like Homework, Timetable etc
                                            even course/subject not assigned to this class teacher.<br/><br/><strong>How
                                                to assign Subject Teacher -<br/><br/></strong>To assign Subject Teacher
                                            you need to create Timetable from <strong>Academics &gt; Class
                                                Timetable</strong> for the class and from here you can choose subject
                                            and can assign teacher to those selected subjects.<br/><br/><img
                                                    src="assets/article-media/subject.png" alt="" width="1366"
                                                    height="657"/></div>
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading16"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse16" aria-expanded="true" aria-controls="collapse16"><i
                                                    class="more-less fa fa-plus-circle"></i>How to assign fees to
                                            student in eduflow?</a></h4></div>
                                <div id="collapse16" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading16">
                                    <div class="panel-body">In eduflow you can assign fees for each student by
                                        creating fees groups from Fees Collection &gt; Fees Group then Fees Collection
                                        &gt; Fees Master (create fees by selecting fees group here) and assign to
                                        student from Fees Master &gt; Assign/view Fees. Please check the following
                                        documentation <a href="docs/index.html#feescollect" target="_blank"
                                                         rel="noopener noreferrer">https://smart-school.in/docs/#feescollect</a>&nbsp;for
                                        more understanding.
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading17"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse17" aria-expanded="true" aria-controls="collapse17"><i
                                                    class="more-less fa fa-plus-circle"></i>Want to know about Smart
                                            School Biometric Attendance App?</a></h4></div>
                                <div id="collapse17" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading17">
                                    <div class="panel-body"><p>To take attendance in eduflow automatically through
                                            biometric attendance device you should have eduflow Biometric
                                            Attendance App (desktop application) and Biometric Attendance Device. Smart
                                            School Biometric Attendance App supports multiple biometric attendance
                                            devices so you can add multiple devices and take attendance with them
                                            simultaneously. You should purchase compatible biometric devices at your end
                                            from any online store or from your local market. To purchase eduflow
                                            Biometric Attendance App please contact to support <a
                                                    href="https://support.qdocs.net/" target="_blank" rel="noopener">https://support.qdocs.net/</a>&nbsp;.
                                        </p>
                                        <p>&nbsp;</p>
                                        <p>Using biometric device and its configuration all details will be provided in
                                            its documentation. With eduflow Biometric Attendance App purchase you
                                            will get Windows OS executable files, runtime and installer,
                                            documentation.</p>
                                        <p>&nbsp;</p>
                                        <p>Price -</p>
                                        <p>eduflowBiometric Attendance App price: USD $99 or INR Rs.7500 (without
                                            payment processing fees) with 12 month support with lifetime free
                                            updates.</p>
                                        <p>&nbsp;</p>
                                        <p>Biometric Device Specifications -</p>
                                        <p>eduflowBiometric Attendance App supports any biometric attendance
                                            device which supports ZKTeco Firmware with Push Data (atleast Push Service
                                            Ver. 2) feature. For development we have used (<strong>ZKTeco K60</strong>)
                                            for reference purpose only, you can purchase device from your local market
                                            or from your country online site for same specification) model device.</p>
                                        <p>&nbsp;</p>
                                        <p>Below are a list of items you should ensure your computer hardware/software
                                            should comply with to install and run eduflowBiometric Attendance App
                                            -</p>
                                        <p>- Atleast Intel i3 processor or its equivalent other processor</p>
                                        <p>- Atleast 4GB of RAM</p>
                                        <p>- Atleast Microsoft Windows 7 - 64 Bit Operating System</p>
                                        <p>- Broadband Internet connectivity with minimum 1 MBPS speed</p>
                                        <p>&nbsp;</p>
                                        <p>You can check the documentation of eduflowBiometric Attendance App at&nbsp;<a
                                                    href="ssba-docs/index.html" target="_blank"
                                                    rel="noopener noreferrer">https://smart-school.in/ssba-docs/</a>&nbsp;.
                                        </p>
                                        <p>&nbsp;</p>
                                        <p>If you still having any doubt about eduflowBiometric Attendance App
                                            then feel free to ask at support.</p></div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading18"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse18" aria-expanded="true" aria-controls="collapse18"><i
                                                    class="more-less fa fa-plus-circle"></i>What is the difference
                                            between Examination and Online Examination?</a></h4></div>
                                <div id="collapse18" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading18">
                                    <div class="panel-body">
                                        <div dir="ltr">
                                            <div>Examination and Online examination both are different modules.</div>
                                            <div>​</div>
                                            <div>Examination Module: It is used for regular/offline examination where
                                                exam based on theory or practical and student answer in this exam on
                                                pages based answer sheet. Suppose a regular maths exam of class 7 should
                                                be conduct in school's class using question paper and answer sheet.
                                                &nbsp;After examination student should submit answer sheet to examiner.
                                                Finally student marks should be entered in exam marks and their result
                                                and marksheet will be prepared.
                                            </div>
                                            <div>&nbsp;</div>
                                            <div>Online Examinations Module : It is used for online examination where
                                                question, exam, answer everything is created under eduflowand
                                                student take exam online through computer and submit their answer
                                                immediately. After result &nbsp;published student can check their result
                                                online.
                                            </div>
                                        </div>
                                        <div class="attachment-thumb">&nbsp;</div>
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading19"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse19" aria-expanded="true" aria-controls="collapse19"><i
                                                    class="more-less fa fa-plus-circle"></i>How to add subscription fees
                                            in Smart School?</a></h4></div>
                                <div id="collapse19" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading19">
                                    <div class="panel-body">In eduflowyou don't have to create subscription fees
                                        for every months because student fees are not something like subscription
                                        billing which can be vary month to month depends on services usage. Student fees
                                        are pre decided at time of student admission so in beginning of academic session
                                        you will configure and create all fees for all students with their due dates.
                                        Although you can change assigned fees at any time of student because fees are
                                        calculated in real time.<br/><br/>To understand how eduflowfees collection
                                        module is working please check this documentation <a
                                                href="category/fees-collection.html">https://smart-school.in/category/fees-collection</a>
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading20"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse20" aria-expanded="true" aria-controls="collapse20"><i
                                                    class="more-less fa fa-plus-circle"></i>Unable to login into student
                                            account?</a></h4></div>
                                <div id="collapse20" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading20">
                                    <div class="panel-body">If you are getting alert message "Sorry! You are not
                                        belonging to any class for current academic session." while login to student
                                        account so this message is occurred when a student is login which is belonging
                                        to an academic session and that session is not currently set as current academic
                                        session in your eduflowSystem Settings &gt; General Setting. So please
                                        check for your current academic session. &nbsp;
                                    </div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading21"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse21" aria-expanded="true" aria-controls="collapse21"><i
                                                    class="more-less fa fa-plus-circle"></i>How to set Start Day of Week
                                            sequence at Timetable ?</a></h4></div>
                                <div id="collapse21" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading21">
                                    <div class="panel-body">To set start day of week for timetable go to <strong>System
                                            Settings &gt; General Setting</strong>, here you will find option Start Day
                                        of Week to set start day according to your country.<br/><br/><img
                                                src="assets/article-media/startday.png" alt="" width="800"
                                                height="390"/></div>
                                </div>
                            </div><!--./panel 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading22"><h4 class="panel-title"><a
                                                role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse22" aria-expanded="true" aria-controls="collapse22"><i
                                                    class="more-less fa fa-plus-circle"></i>How to change text label in
                                            Smart School.</a></h4></div>
                                <div id="collapse22" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading22">
                                    <div class="panel-body">In Smart School, if you want to change text labels like if
                                        you want to change text lebel of "<strong>Academics</strong>" to "<strong>Academics</strong>
                                        <strong>Settings</strong>" then for this you should go to the Language file
                                        location, here first you should select the Language file according to your
                                        country language and do changes in that language file.<br/><br/>For e.g. if you
                                        want to change text lebel of <strong>"Academics"</strong> to <strong>"Academics
                                            Settings"</strong> in English language then go to the file path location
                                        \application\language\English\app_files and open system_lang.php file then
                                        serach for the keyword <strong>"Academics"</strong>&nbsp;<br/><br/><img
                                                src="assets/article-media/Screenshot-9531-.png" alt="" width="800"
                                                height="367"/><br/><br/>Now replace it with <strong>"Academics
                                            Settings"</strong> then save it.<br/><br/><img
                                                src="assets/article-media/Screenshot-9542-.png" alt="" width="800"
                                                height="368"/><br/><br/>After save changes it will look like below image
                                        at eduflowsite.<br/><br/><img src="assets/article-media/set.png" alt=""
                                                                            width="800" height="390"/><br/><br/><strong>Note-</strong>
                                        Please make sure you have done changes in proper format (like Academics Settings
                                        must be under single inverted commas) otherwise code will cause an error.
                                    </div>
                                </div>
                            </div><!--./panel 1--></div><!-- panel-group --><!-- ad bottom side -->
                        <div class="ad_bottom"></div>
                    </div><!--./col-md-9-->
                    <div class="col-md-3 col-lg-3 col-sm-3">
                        <div class="ad_rsidebar">
                            <div class="sidebanners-ad"><a href="https://1.envato.market/smart_school_android_app"
                                                           target="_blank"><img src="assets/front/ads/android-app.jpg"
                                                                                alt="Smart School"></a></div>
                        </div>
                        <div class="sidecard">
                            <div class="content"><h4 class="info-title">Categories</h4>
                                <form method="GET" action="https://smart-school.in/home/getcategory"
                                      class="category_form"><select class="selectpicker category_dropdown" name="cat"
                                                                    style="width: 100%; display: block;">
                                        <option>Select Category</option>
                                        <option value="1">Getting Started</option>
                                        <option value="2">System Settings</option>
                                        <option value="3">Academics</option>
                                        <option value="4">Front Office</option>
                                        <option value="5">Student Information</option>
                                        <option value="6">Fees Collection</option>
                                        <option value="7">Income</option>
                                        <option value="8">Expenses</option>
                                        <option value="9">Attendance</option>
                                        <option value="10">Examinations</option>
                                        <option value="11">Online Examinations</option>
                                        <option value="12">Human Resource</option>
                                        <option value="13">Communicate</option>
                                        <option value="14">Download Center</option>
                                        <option value="15">Homework</option>
                                        <option value="16">Library</option>
                                        <option value="17">Inventory</option>
                                        <option value="18">Transport</option>
                                        <option value="19">Hostel</option>
                                        <option value="20">Certificate</option>
                                        <option value="21">Front CMS</option>
                                        <option value="24">Common Issues & Troubleshooting</option>
                                        <option value="25">Changelog</option>
                                        <option value="26">Smart School</option>
                                        <option value="27">eduflowAndroid App</option>
                                        <option value="31">FAQ</option>
                                        <option value="32">Installation</option>
                                        <option value="33">System Update</option>
                                        <option value="34">Alumni</option>
                                        <option value="35">Lesson Plan</option>
                                        <option value="36">Zoom Live Classes</option>
                                        <option value="37">eduflowZoom Live Class</option>
                                        <option value="38">Gmeet Live Class</option>
                                        <option value="40">Miscellaneous</option>
                                        <option value="41">Student/Parent Panel</option>
                                        <option value="42">eduflowGmeet Live Class</option>
                                        <option value="43">Online Admission</option>
                                        <option value="44">Online Course</option>
                                        <option value="46">Two Factor Authentication</option>
                                        <option value="47">Multi Branch</option>
                                        <option value="48">Behaviour Records</option>
                                        <option value="49">eduflowOnline Course</option>
                                        <option value="53">CBSE Examination</option>
                                        <option value="54">eduflowTwo Factor Authentication</option>
                                        <option value="55">eduflowMulti Branch</option>
                                        <option value="56">eduflowBehaviour Records</option>
                                        <option value="57">eduflowCBSE Examination</option>
                                        <option value="58">QR Code Attendance</option>
                                        <option value="59">eduflowQR Code Attendance</option>
                                    </select></form>
                            </div><!--./content--></div><!--./card-->
                        <div class="sidecard">
                            <div class="content"><h4 class="info-title">Latest Articles</h4>
                                <ul class="side-list">
                                    <li><a href="article/version-1-0-9.html">Version 1.0</a></li>
                                    <li><a href="article/how-to-generate-the-zoom-api-credential.html">How to generate
                                            the zoom API credential?</a></li>
                                    <li><a href="article/version-4-1-1.html">Version 4.1</a></li>
                                    <li><a href="article/version-7-0-1.html">Version 7.0.1</a></li>
                                    <li><a href="article/about-qr-code-attendance.php">About QR Code Attendance</a>
                                    </li>
                                    <li><a href="article/how-to-check-staff-day-wise-attendance-report-1.html">How to
                                            check staff day wise attendance report?</a></li>
                                    <li><a href="article/how-to-check-the-student-day-wise-attendance-report.html">How
                                            to check the student day wise attendance report?</a></li>
                                    <li>
                                        <a href="article/how-to-enable-the-auto-attendance-and-mark-the-attendance-of-student-and-staff-using-qr-code-barcode.html">How
                                            to enable the auto attendance and mark the attendance of student and staff
                                            using QR Code / Barcode?</a></li>
                                    <li>
                                        <a href="article/how-to-disabled-the-auto-attendance-and-mark-the-attendance-of-student-and-staff-using-qr-code-barcode.html">How
                                            to disabled the auto attendance and mark the attendance of student and staff
                                            using QR Code / Barcode?</a></li>
                                    <li>
                                        <a href="article/how-to-enabled-disabled-the-parent-for-gmeet-live-classes.html">How
                                            to enabled / disabled the parent for gmeet live classes?</a></li>
                                </ul>
                            </div><!--./content--></div><!--./card--></div><!--./col-md-3--></div><!--./row--></div>
            <!--./container--></section>
    </div><!--./main-school-->
    <?php include 'footer.php'; ?>
    <!--<div class="chatbtn">-->
    <!--Begin Comm100 Live Chat Code--><!--<div id="comm100-button-724"></div><script type="text/javascript">
                                var Comm100API = Comm100API || {};
                                (function (t) {
                                    function e(e) {
                                        var a = document.createElement("script"), c = document.getElementsByTagName("script")[0];
                                        a.type = "text/javascript", a.async = !0, a.src = e + t.site_id, c.parentNode.insertBefore(a, c)
                                    }
                                    t.chat_buttons = t.chat_buttons || [], t.chat_buttons.push({code_plan: 724, div_id: "comm100-button-724"}), t.site_id = 70170, t.main_code_plan = 724, e("https://chatserver.comm100.com/livechat.ashx?siteId="), setTimeout(function () {
                                        t.loaded || e("https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=")
                                    }, 5e3)
                                })(Comm100API || {})
                            </script>--><!--End Comm100 Live Chat Code--><!--</div>--></div><!--./wrapper-->
<!--Core JS Files-->
<script src="assets/admin/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/admin/assets/js/scrolling-nav.js"></script>
<script src="assets/admin/assets/js/support-qdocs.js"></script>
<script src="assets/admin/assets/js/qdocs-kite.js" type="text/javascript"></script>
<script src="assets/admin/assets/js/jquery.easing.min.js"></script>
<script src="assets/admin/assets/js/wodry.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("ul.sub-menu").parent().addClass("dropdown");
        $("ul.sub-menu").addClass("dropdown-menu");
        $("ul#main-menu li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a").removeClass("dropdown-toggle");
        $('.navbar .dropdown-toggle').append('<b class="caret"></b>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });
    $('.wodryRX').wodry({
        animation: 'rotateX',
        delay: 4000,
        animationDuration: 1600
    });

    $('.faq_question').click(function () {
        //$(this).next('ac-small').slideToggle('500');
        //$(".ac-container label").slideDown();
        $(this).find('i').toggleClass('fa-plus fa-minus')

    });
    $(document).ready(function () {
        $(".ac-container label").click(function () {
            $(".ac-small").slideUp(150).attr('aria-hidden', 'true');
        });
        $(".ac-container").click(function () {
            $(".ac-small").slideDown(150).attr('aria-hidden', 'false');
        });
    });


</script>
<script type="text/javascript">
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('fa-plus-circle fa-minus-circle');
    }

    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

</script><!-- <script src=""></script><script type="text/javascript">
              $('.main-div').enscroll({
          showOnHover: false,
          verticalTrackClass: 'track3',
          verticalHandleClass: 'handle3'
          });
          </script>--><!-- Latest compiled and minified JavaScript -->
<script src="assets/admin/assets/js/bootstrap-select.min.js"></script>
<script src="assets/admin/assets/js/wow.min.js"></script>
<script type="text/javascript">
    $('select').selectpicker();

    wow = new WOW({}).init();
</script>
</body>
<!-- Mirrored from smart-school.in/faq by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 14:27:30 GMT -->
</html>
<script type="text/javascript">
    var currentFocus;
    $(document).ready(function () {
        $(document).on('propertychange input', '#myInput', function () {
            $('#myInput').popover('hide');
            currentFocus = -1;
            var keyword_value = $(this).val();
            if (!keyword_value.length) {
                $('.autocomplete-items').remove();
                return false;
            }
            $.ajax({
                url: "https://smart-school.in/home/autocomplete",
                data: {'keyword': keyword_value},
                type: 'POST',
                dataType: 'JSON',
                beforeSend: function () {


                },
                success: function (result) {
                    $('.autocomplete-items').remove();
                    var div = $('<div />', {
                            "class": 'autocomplete-items',
                            "id": 'myInputautocomplete-list',
                        }
                    );
                    $.each(result.result, function (index, value) {

                        div.append($('<div>', {
                            id: 'inner-div',
                            class: (value.category_name == "FAQ") ? "FAQ" : "standard",
                        }).append($('<a>', {
                            id: 'innerdiv',
                            title: value.slug,
                            text: value.title + " ",
                            href: (value.category_name == "FAQ") ? base_url + "faq/" + value.slug : base_url + "article/" + value.slug
                        }).append($('<span>', {
                            class: 'badge',
                            text: value.category_name

                        }))).append($('<input>', {
                            id: 'innerdiv',
                            type: 'hidden',
                            val: value.title

                        })));
                    });

                    div.appendTo($('form#new_article_form').find('div.autocomplete'));

                },
                error: function (xhr) { // if error occured
                    alert("Error occured.please try again");

                },
                complete: function () {

                }

            });

        });

        $(document).on('keydown', '#myInput', function (e) {
            if (e.keyCode == 40) {
                currentFocus++;

                addActive();
                scrollsearch();
            } else if (e.keyCode == 38) { //up
                currentFocus--;
                addActive();
                scrollsearch();
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                // e.preventDefault();


                $('form#new_article_form').find('div.autocomplete-items div').eq(currentFocus).trigger("click");
            } else if (e.keyCode == 27) {
                $('.autocomplete-items').remove();
            }

        });

    });

    function addActive() {
        /*a function to classify an item as "active":*/
        var div_list = $('form#new_article_form').find('div.autocomplete-items div');

        /*start by removing the "active" class on all items:*/
        removeActive();

        if (currentFocus >= div_list.length)
            currentFocus = 0;
        // if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/

        // x[currentFocus].classList.add("autocomplete-active");
        $('form#new_article_form').find('div.autocomplete-items div').eq(currentFocus).addClass("autocomplete-active");
    }

    function removeActive() {
        /*a function to remove the "active" class from all autocomplete items:*/
        $('form#new_article_form').find('div.autocomplete-items div').removeClass('autocomplete-active');
    }

    $(document).on('click', '.autocomplete-active', function () {
        $('#myInput').val("").val($('.autocomplete-active').find('input').val());
    });
    $(document).on('click', function (e) {
        closeArticleLists(e.target);
    });

    function closeArticleLists(elemnt) {

        if (elemnt != document.getElementById("myInput")) {
            $('.autocomplete-items').remove();
        }
    }

    function scrollsearch() {
        $(".autocomplete-items").scrollTop(0);//set to top
        $(".autocomplete-items").scrollTop($('.autocomplete-active:first').offset().top - ($(".autocomplete-items").height() + ($(".autocomplete-active").height() * 4)));
    }
</script>
<script type="text/javascript">

    $(function () {
        $("form#new_article_form").submit(function () {

            var valid = 0;
            var value = $.trim($(this).find('input[type=text]').val());

            if (value.length >= 3) {
                valid += 1;
            }

            if (valid) {
                return true;
            } else {
                $('#myInput').popover('show');
                return false;
            }
        });
    });


    $('#myInput').popover({
        html: true,
        trigger: 'manual',
        placement: 'bottom',
        content: '<div class="text text-danger">Please enter atleast 3 character</div>',
        template: '<div class="popover my-popover" role="tooltip"><div class="arrow"></div><div class="popover-content"></div></div>'
    });


    $(document).on('change', '.category_dropdown', function () {
        this.form.submit();
    });
</script>