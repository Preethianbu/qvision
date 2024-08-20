<?php
$username = $_SESSION['username'];
?>

<script> 
function test()
    {
      
   $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quotation_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

	</script> 
<style>
[class*=sidebar-dark-] .sidebar a {
    color: white !important;
}
[class*=sidebar-dark] .brand-link{
	border-bottom: 0px solid #4b545c !important;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active{
	background-color: #ff8b3d !important;
}
.sidebarrr{
	background-color: red !important;
}
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #808080 !important;">
    <!-- Brand Logo -->
  <!--  <a href="index.php" class="brand-link">
        <img src="dist/img/SSlogo.jpg" alt="blogo Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">-->

      <!--  <span class="brand-text font-weight-light"><b>SS Info Systems</b></span>-->

    <!-- Sidebar -->
    <div class="sidebar">   
        <!-- Sidebar Menu -->
        <nav class="mt-2" style="margin-left: -22px;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="index.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <?php
                $userrole = $_SESSION['userrole'];
                $sql = $con->query("SELECT zmsm.id,zmsm.menu_name,zmsm.call_method FROM z_masters_menu zmsm join z_role_detail zrd on zrd.menu_id=zmsm.id WHERE zrd.code='$userrole'  and zrd.view_only='1' AND zrd.edit_only='1' AND zrd.all_only='1'group by menu_name");

                while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    $menuid = $row['id'];
                    ?>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                <?php echo $row['menu_name']; ?>
                                <i style="position: absolute;left: 249px;top: 14px;" class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <?php
							//echo $userrole."pppp".$menuid."role".$userrole;
                            $sql2 = $con->query("SELECT zmsm.name,zmsm.call_method FROM z_masters_sub_menu zmsm join z_role_detail zrd on zrd.submenu_id=zmsm.id WHERE zmsm.status='1' and zrd.code='$userrole' and zrd.menu_id='$menuid' and zrd.view_only='1' AND zrd.edit_only='1' AND zrd.all_only='1'");

                            while ($res = $sql2->fetch(PDO::FETCH_ASSOC)) {
                                ?>  

                                <li class="nav-item">
                                    <a onclick="<?php echo $res['call_method']; ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <?php echo $res['name']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>			
                    </li>	

                    <?php
                }
                ?>
            </ul>
        </nav>        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
function claim_request() 
{
//alert()
}
    function accounts_master()
    {
        $.ajax({
            type: "POST",
            url: "/Qvision/Accounts/main.php",
            success: function (data) {
                $("#page_loader").html(data);
            }
        })
    }

    function password_masters()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/password/password_master/password_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function application()
    {
       alert('Kindly Fill the Application Form')
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/new.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function feedback()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/interview_feedback/new.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function user_role()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/user_role/role.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function ctc_approval()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/ctcapproval/CTC_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function interview_reports()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/interviewreports/interviewreports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function department_reports()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/departmentreports/departmentreports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function ctc_reports()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/ctc_reports/ctc_reports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function role_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/role/role.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_report()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/staff_report/staff_list_report.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function leave_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/leave_master/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function scale_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/scale_master/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function leave_management()
    {
        $.ajax({
            type: "POST",
            url: "/Leave_Management/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function emp_leave()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/employees_leave/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function employess()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/employees/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function employee_allowance()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/departmentreports/departmentreports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function addition_allowance()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/addittion_allowance/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function employee_payroll()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/departmentreports/departmentreports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function question_managements()
    {

//alert("bala");
        $.ajax({
            type: "POST",
            url: "Qvision/Question_Management/new.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })

    }
    function candicate_results()
    {

//alert("bala");
        $.ajax({
            type: "POST",
            url: "Qvision/Question_Management/candicate_results.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })

    }
    function question()
    {
        //alert("gopi");
        $.ajax({
            type: "POST",
            url: "Qvision/Question_Management/aptitude.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function candidate_form()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/candidate/candidate_form.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

     function appraisal_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/appraisal_master/appraisal_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function kra_approve_emp()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/appraisal_master/kra_approve.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	function appraisal()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/appraisal/appraisal_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	
	function self_appraisal_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/self_appraisal_master/self_appraisal_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function self_appraisal()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/appraisal/self_appraisal/self_appraisal.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	function appraisal_approve_md()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/appraisal/appraisal_approve_md.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	
	function appraisal_round_mapping()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/appraisal_round_mapping/appraisal_rounds_mapping.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	function appraisal_approval()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/appraisal/appraisal_approve.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function department_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/department_master/department_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function devision_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/devision_master/devision_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function designation_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/designation_master/designation_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function interview_rounds()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/interview_rounds/interview_rounds.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function interview_rounds_mapping()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/interview_rounds_mapping/interview_rounds_mapping.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function department_mapping()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/masters/department_mapping/department_mapping.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function company_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/company_master/company_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function candidate_details()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/applicationform/view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
//assesment 
    
    function question_name()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/assesment/question_name.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function section_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/assesment/section_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function assessment_employee()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/assessment_candidate/assessment_emp_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function emp_assessment_question()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/assesment_question/empwise_assesment_qn.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function assessment_result()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/assesment_question/candidate_results.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Payoll_generation()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/payroll/payroll_process/payroll_generation.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	function salary_summary()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/salary_details/salary_details_main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function leaves()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/payroll/leaves.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function leave_apply()
    {
        $.ajax({
            type: "POST",
            url: " Qvision/Leave_Management/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function holidays()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/payroll/holiday/holiday.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function iozd()
    {
        $.ajax({
            type: "POST",
            url: "/Qvision/payroll/od.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function wedredf()
    {
		alert()
        $.ajax({
            type: "POST",
            url: "/Qvision/payroll/od_requests.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function reports()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/payroll/payroll_reports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Payroll_close()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/payroll/payroll_process/payroll_close.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function deduction()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/deduction/main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function earnings()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/earnings/earnings.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Attendance()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/attendance/attendance.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function pay_slip()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/payroll/payslip/payslip_main.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function document_approve()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/document_view_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_list()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff/staff_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_asset()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/main_page.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_asset_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset_master/staff_asset_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function hod()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/hod/hod.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

	function customer_db()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/CRM/customer_db.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function enquiry()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/CRM/enquiry.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function cost_sheet_approval()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/CRM/cost_sheet_approval.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function client_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/client_master/client_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	
	
    function lead()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/CRM/proposal.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Cost_sheet()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/cost_sheet_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function quotation_list()
	{

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/overall_quotation_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
		function quotation_view() {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quotation_select_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })

    }
	
    function Cost_sheet_upload()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/cost_sheet_upload_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Cost_sheet_approve()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/cost_sheet_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Cost_sheet_revise()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/costsheet_revise_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Quotation()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quatation_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function Quotation_approve()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quotation_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Quotation_send()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quotation_send_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Quotation_revise()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quotation_revise_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function quotation_regenerate()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/quotation/quotation_reg_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function interview_candidate_list()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/candidate/candidate_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function product_master()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/masters/product_master/product_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function service_master()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/masters/Service_master/service.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function calls_master()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/masters/Calls_master/calls.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function resource_master()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/masters/Resource_master/resource.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function feedback_master()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/masters/Feedback_master/feedback.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function Product_master()
{  

	$.ajax({
    type:"POST",
    url:"/Qvision/masters/Product_master/product_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  })
}
    function vendor_master()
    {

        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/doller_vendor_master/vendor.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function resource_form()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/resource/resource_form/resource_form.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function resource_list()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/resource/resource_form/resource_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function jobdescription_form()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Resource/jobdescription_form/jobdescription_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function job_description()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/job_description/job_description_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function jobdescription_list()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Resource/jobdescription_form/jobdescription_allocated_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function job_description_approval()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Resource/jobdescription_form/job_description_approval.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	function job_description_approve_list()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Resource/jobdescription_form/job_description_approval_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function finance_po_approve()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/po_approve_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function service_po_approve()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/service_po_approve_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	function service_po_status()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/service_po_status.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function marketing_po_approve()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/marketing_po_approve_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	function marketing_po_approve2()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/marketing_po_approve_level2_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
	
	
    function po_status()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/po_status.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function po_upload()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/BusinessProcess/po_approval/po_upload.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function staff_resignation_form()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_resignation/staff_resignation_form.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_resignation_list()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_resignation/staff_resignation_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function hr_resignation_approve()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_resignation/hr_resignation_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_resignation_status()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_resignation/staff_resignation_status.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function candidate_reject_list()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/candidate/candidate_reject_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function candidate_qn()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/candidate/candidwise_assesment_qn.php",
            success: function (data)
            {
                $("#main_content").html(data);
            }
        })
    }
    function prefix_code()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/Prefixcode_master/prefixcode.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function consultant_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/consultant_master/consultant.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function quotation_text()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/consultant_master/consultant.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }


    function asset_master()
    {
        $.ajax({
            type: "POST",
            type: "POST",
            url: "Qvision/masters/asset_master/asset.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function asset_form()
    {
        $.ajax({
            type: "POST",
            type: "POST",
            url: "Qvision/assets/asset_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function sim_master()
    {
        $.ajax({
            type: "POST",
            type: "POST",
            url: "Qvision/Recruitment/sim_master/sim_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function sim_mapping()
    {
        $.ajax({
            type: "POST",
            type: "POST",
            url: "Qvision/Recruitment/sim_mapping/sim_mapping.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_asset_allocate()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/staff_asset_allocate_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_asset_accept()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/staff_asset_accept_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_asset_approve()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/staff_asset_approve_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_assets_view_md()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/staff_asset_list_md.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_assets_return()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/staff_assets_return_hr.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function staff_assets_recollect()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Recruitment/staff_asset/staff_assets_recollect.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function additional_activities()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/performance_analysis/additional_activities.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function performance_review()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/performance_analysis/performance_review.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function weekly_review()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/performance_analysis/weekly_review.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function site_master()
    {
      /*   $.ajax({
            type: "POST",
            url: "Qvision/appraisal/appraisal_approve_md.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        }) */
    }
    function location_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/location_master/location_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function purchase_order()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/Purchase_process/purchase_order_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

    function Salary_advance() {

        $.ajax({
            type: "POST",
            url: "Qvision/payroll/salary_advance/salary_advance_index.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })

    }
	function mail_password() {

        $.ajax({
            type: "POST",
            url: "Qvision/mail_password/mail_password_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })

    }
	
	
	function purchase_requisition()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/purchase_requisition_list.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}
	
	function finance_requisition_approve()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/finance_requisition_approve.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}
	
	function purchase_requisition_approve()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/purchase_requisition_approve.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}

	function hike_master()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/masters/hike_master/hikelist.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}

//// PF Reports ////
    function pf_report()
	{  
		$.ajax({
		type:"POST",
		url:"Qvision/reports/pf_reports/pf_report.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}

//// Salary Reports ////
    function salary_report()
	{  
		$.ajax({
		type:"POST",
		url:"Qvision/reports/salary_reports/salary_report.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}

///// Attendance Report /////
    function att_reports()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/reports/attreports/attreports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

///// ESIC Reports ////// 
    function esic_reports()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/reports/esicreports/esicreports.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

////Purchase //////////////////

function vendor_po_generate(){
	
	$.ajax({
            type: "POST",
			url:"QVision/Purchase_process/vendor_po_generate/vendor_po_list.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
		
}

function grn_list()
{  

	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/grn_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  })
}

function finance_vendor_approve()
{
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/finance_purchase/finance_vendor_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  })
}

function purchase_order_list()
{
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/purchase_process_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  })
}


function delivery_challan()
{  
 
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/delivery_challan/delivery_challan_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}

function invoice()
{  
 
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/delivery_challan/invoice_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}



// Ticketing System
function tickets_raising()
{  
	$.ajax({
    type:"POST",
    url:"QVision/BusinessProcess/Ticketing_system/tickets_raising_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}
function assign_tickets()
{  
	$.ajax({
    type:"POST",
    url:"QVision/BusinessProcess/Ticketing_system/ticket_assign_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}
function ticket_assigned()
{  
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/poTicket/assigned_ticket_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}

//////////////// PO Product Customization After GRN Generate //////////////
function po_product_customization()
{  
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/poTicket/ticket_assign_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}

////////////////  After GRN Generate/// Purchase  //////////////
function generate_purchase()
{  
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/grn_purchase_list.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}

////////////////  Invoice Approve to raising  //////////////
function invoice_approve()
{  
	$.ajax({
    type:"POST",
    url:"QVision/Purchase_process/delivery_challan/invoiceApprove.php",
    success:function(data){
      $("#main_content").html(data);
    }
  }) 
}

/////////////////// LR/courier /////////////////////////
function lr_courier()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/courier_master/lr_courier.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}

    ///////////////////  installation /////////////////////////
function  installation()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/installation/ticket_assign_list.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}

      ///////////////////  installation /////////////////////////
function  install_material()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/installation/assigned_ticket_list.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}  
function comp()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/poTicket/bomverifylist.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}  
function warrenty()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/installation/warrentyintimationlist.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}  


function invoice_rerequest()
	{  

		$.ajax({
		type:"POST",
		url:"Qvision/Purchase_process/delivery_challan/invoice_re_request_list.php",
		success:function(data){
		  $("#main_content").html(data);
		}
	  })
	}  

    function assesment_master()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/assesment_master/assesment_master.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function assesment_question()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/assesment_question/assesment_question.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }


    function Assesment_Report()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/assesment_report/assesment_report.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }
    function Assesment_master_page()
    {
        $.ajax({
            type: "POST",
            url: "Qvision/masters/Assesment_master_page/Assesment_master_page.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    }

</script>
<script>
/* function claim_apporove()
    {
		alert();
        $.ajax({
            type: "POST",
            url: "Qvision/mail_password/mail_password_view.php",
            success: function (data) {
                $("#main_content").html(data);
            }
        })
    } */
</script>