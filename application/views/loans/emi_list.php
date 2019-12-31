<?php $this->load->view('includes/header'); ?>
<style>
a {
    color: #09305a;
}
</style>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader">
            <div class="d-flex align-items-center">
                <div class="mr-auto ">
                    <h3 class="m-subheader__title d-lg-none d-md-none d-sm-none">
                        EMI Lists
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-content">
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
                            <div style="text-align: right; vertical-align: middle;padding-top: 20px;">
                                <div class="m-portlet__head-title">
                                    <button class="btn m-btn--pill btn-dark btn-sm " data-target="#m_modal_add_category" data-toggle="modal">CREATE EMI</button>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body" style="padding-top:15px">
                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table m-table table-bordered" style="font-size:14px">
                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Loan name</th>
                                                        <th>Starting Date</th>
                                                        <th>Ending Date</th>
                                                        <th>Total Emi / Pending</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1; if(!empty($emi_list)) { foreach($emi_list as $value) { 
                                                        ?>
                                                        <tr>
                                                            <td><a href="<?php echo base_url();?>expense/emi_detail/<?php echo $value['id']; ?>"><?php echo $i; ?></td>
                                                            <td><a href="<?php echo base_url();?>expense/emi_detail/<?php echo $value['id']; ?>"><?php echo $value['loan_name'] ?></td>
                                                            <td><a href="<?php echo base_url();?>expense/emi_detail/<?php echo $value['id']; ?>"><?php echo date('d-m-Y',strtotime($value['starting_date'])); ?></td>
                                                            <td><a href="<?php echo base_url();?>expense/emi_detail/<?php echo $value['id']; ?>"><?php echo date('d-m-Y',strtotime($value['ending_date'])); ?></td>
                                                            <td><a href="<?php echo base_url();?>expense/emi_detail/<?php echo $value['id']; ?>"><?php echo $value['no_of_emi']; ?></td>
                                                            <td><a href="<?php echo base_url();?>expense/emi_detail/<?php echo $value['id']; ?>"><?php if($value['status'] == 0){ ?>
                                                                <span class="m-badge m-badge--danger m-badge--wide">Pending</span>
                                                         <?php } else { ?>
                                                            <span class="m-badge m-badge--success m-badge--wide">Completed</span>
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
            <form action="" method="post" id="add_category_model" style="margin-bottom: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        CREATE EMI
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
                            NAME
                        </label>
                        <div class="col-10">
                            <input required class="form-control m-input" type="text" name="emi_name">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-2 col-form-label">
                            Starting Date
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="date" name="starting_date">
                        </div>
                        <label for="imaging_date" class="col-2 col-form-label">
                            Ending Date
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="date" name="ending_date">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-2 col-form-label">
                            Total Amount
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="text" name="total_amount">
                        </div>
                        <label for="imaging_date" class="col-2 col-form-label">
                            No of EMI
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="text" name="no_of_emi">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-2 col-form-label">
                            Interest Amount
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="text" name="interest_amount">
                        </div>
                        <label for="imaging_date" class="col-2 col-form-label">
                            Cash Paid
                        </label>
                        <div class="col-4">
                            <input required class="form-control m-input" type="text" name="cash_paid">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-2 col-form-label">
                            Paid Via
                        </label>
                        <div class="col-4">
                            <select required class="form-control" name="paid_via" >
                                <option selected disabled value="0">--Select Option--</option>
                                <?php foreach($paid_via as $value) { ?>
                                <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                <?php } ?>
                            </select>
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

<?php $this->load->view('includes/footer'); ?>
<script>

    $(window).on('load', function ()
    {
        $('body').removeClass('m-page--loading');
    });

    function showModal(catid, subid, catname, subname)
    {
        $("#category_id").val(catname);
        $("#subcategory_id").val(subname);
    }

    $('#add_category_model').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $('#preloader').css("display", "block");
            $.ajax({
                url: '<?php echo base_url(); ?>expense/addEMI',
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
        
        $('#add_subcategory').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $('#preloader').css("display", "block");
            $.ajax({
                url: '<?php echo base_url(); ?>dashboard/addSubCategory',
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