<?php $this->load->view('includes/header'); ?>
<style>
a {
    color: #09305a;
}
.pad{
    padding: 10px !important;
}
.m-widget24 .m-widget24__item .m-widget24__change
{
    color: #3a3b3c;
}
.m-widget24 .m-widget24__item .m-widget24__desc
{
     color: #3a3b3c;
}
</style>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body" style="margin-top: 55px;">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl">
        <div class="m-grid__item m-grid__item--fluid m-wrapper ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
                        <div class="m-portlet__head" style="width: 100%;">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        EMI MASTER
                                    </h3>
                                </div>
                            </div>
                            <?php if($emi_master['status'] != 1) { ?>
                            <div style="text-align: right; vertical-align: middle;padding-top: 20px;">
                                <div class="m-portlet__head-title">
                                    <button class="btn m-btn--pill btn-dark btn-sm " data-target="#m_modal_add_category" data-toggle="modal">CREATE INSTALLMENT</button>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="m-portlet__body" style="padding-top:15px">
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <!--begin::New Users-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h3 class="m-widget24__title" style="font-size: 17px;margin-left: 11px;">
                                                <?php echo $emi_master['loan_name']; ?>
                                            </h3>
                                            <table class="table m-table table-striped" style="font-size: 12px;">
                                                <tr>
                                                    <td class="pad">Starting Date:</td><td class="pad"><strong><?php echo date('d-m-Y',strtotime($emi_master['starting_date'])) ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Ending Date:</td><td><strong><?php echo date('d-m-Y',strtotime($emi_master['ending_date'])) ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Paid Via:</td><td><strong><?php echo $emi_master['name']; ?></strong><td></td>
                                                </tr>
                                            </table>
                                            <br>
                                            
                                            <div class="m--space-10"></div>
                                            
                                        </div>
                                    </div>
                                    <!--end::New Users-->
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <!--begin::Total Profit-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h4 class="m-widget24__title">
                                                Total Amount
                                            </h4>
                                            <br>
                                            <span class="m-widget24__desc">
                                                Final Amount including Interest
                                            </span>
                                            <span class="m-widget24__stats m--font-brand" style="font-size: 18px;">
                                                <i style="font-size:20px;" class="fas fa-rupee-sign"></i> <?php $total = $emi_master['total_amount'] + $emi_master['interest_amount']; echo $total.' / '.$paid_amount; ?>
                                            </span>
                                            <div class="m--space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-brand" role="progressbar" style="width: <?php echo ($paid_amount/$total * 100) ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="m-widget24__change">
                                                PAID
                                            </span>
                                            <span class="m-widget24__number">
                                                <?php echo ($paid_amount/$total * 100) ?>%
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Total Profit-->
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <!--begin::New Feedbacks-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h4 class="m-widget24__title">
                                                Total EMI
                                            </h4>
                                            <br>
                                            <span class="m-widget24__desc">
                                                EMI Paid
                                            </span>
                                            <span class="m-widget24__stats m--font-info">
                                                 <?php echo $emi_master['no_of_emi'].' / '.$emi_count; ?>
                                            </span>
                                            <div class="m--space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-info" role="progressbar" style="width: <?php echo ($paid_amount/$total * 100) ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="m-widget24__change">
                                                PAID
                                            </span>
                                            <span class="m-widget24__number">
                                                <?php echo ($paid_amount/$total * 100) ?>%
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::New Feedbacks-->
                                </div>
                            </div>
                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table m-table table-bordered " style="font-size:14px">
                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Due Date</th>
                                                        <th>Amount</th>
                                                        <th>Paid On</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1; if(!empty($installment_list)) { foreach($installment_list as $value) { 
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo date('d-m-Y',strtotime($value['due_date'])); ?></td>
                                                            <td><?php echo $value['loan_amount'];?></td>
                                                            <td><?php if($value['paid_on'] != '')
                                                            {
                                                                echo date('d-m-Y',strtotime($value['paid_on']));
                                                            } else { echo '<strong>DUE</strong>';}?></td>
                                                            <td><?php if($value['status'] == 0){ ?>
                                                                <button data-target="#m_modal_pay_installment" data-toggle="modal" onClick="markPayInst(<?php echo $value['id']; ?>,<?php echo $value['loan_id']; ?>)" class="btn btn-sm m-btn--pill btn-danger">PAY</button>
                                                         <?php } else { ?>
                                                            <span class="m-badge m-badge--success m-badge--wide">Paid</span>
                                                          <?php  } ?></td>                                                       
                                                          </tr>
                                                    <?php $i++; } } else { ?>
                                                        <tr><td colspan="6"><h4 class="text-center">NO RECORD FOUND!</h4></td></tr>
                                                    <?php } ?>                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="m_modal_add_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="create_installment" style="margin-bottom: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        CREATE INSTALLMENT
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-2 col-form-label">
                            Due Date
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="date" name="due_date">
                            <input type="hidden" name="loan_id" value="<?php echo $emi_id; ?>">
                        </div>
                        <label for="imaging_date" class="col-2 col-form-label">
                            Amount
                        </label>
                        <div class="col-4">
                            <input required readonly="" class="form-control m-input" type="number" name="loan_amount" value="<?php echo ($total/12) ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">
                        Close
                    </button>
                    <input type="submit" id="add_category_model" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add category model --------------------------------------------------->
<div class="modal fade" id="m_modal_pay_installment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="installment_paid" style="margin-bottom: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        CREATE INSTALLMENT
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-2 col-form-label">
                            Payment Date
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="date" name="paid_date">
                            <input type="hidden" name="insta_id" id="insta_id">
                            <input type="hidden" name="loan_id" id="loan_id">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">
                        Close
                    </button>
                    <input type="submit" id="add_category_model" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add category model end ----------------------------------------------------------->


<?php $this->load->view('includes/footer'); ?>
<script>

    $(window).on('load', function ()
    {
        $('body').removeClass('m-page--loading');
    });

    function markPayInst(iid,loan_id)
    {
        $("#insta_id").val(iid);
        $("#loan_id").val(loan_id);
    }
    
    $('#installment_paid').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $('#preloader').css("display", "block");
        $.ajax({
            url: '<?php echo base_url(); ?>expense/pay_installment',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data)
            {
                data = JSON.parse(data);
                if (data.code == 1)
                {
                    $('#preloader').css("display", "none");
                    swal({title: "Success", text: data.response, type: "success", confirmButtonClass: "btn btn-primary m-btn m-btn--wide"}).then(function () {
                        location.reload();
                    });
                } else
                {
                    $('#preloader').css("display", "none");
                    swal({title: "Error", text: data.response, type: "error", confirmButtonClass: "btn btn-primary m-btn m-btn--wide"});
                }
            }
        });     
    });
    
    $('#create_installment').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $('#preloader').css("display", "block");
        $.ajax({
            url: '<?php echo base_url(); ?>expense/create_installment',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data)
            {
                data = JSON.parse(data);
                if (data.code == 1)
                {
                    $('#preloader').css("display", "none");
                    swal({title: "Success", text: data.response, type: "success", confirmButtonClass: "btn btn-primary m-btn m-btn--wide"}).then(function () {
                        location.reload();
                    });
                } else
                {
                    $('#preloader').css("display", "none");
                    swal({title: "Error", text: data.response, type: "error", confirmButtonClass: "btn btn-primary m-btn m-btn--wide"});
                }
            }
        });     
    });
    
</script>