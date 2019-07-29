<?php $this->load->view('includes/header'); ?>

<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body" style="margin-top: 55px; background: #efefef">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl">
        <div class="m-grid__item m-grid__item--fluid m-wrapper ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
                        <div class="m-portlet__head" style="width: 100%;">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Create Expense
                                    </h3>
                                </div>
                            </div>
                            <div style="text-align: right; vertical-align: middle;padding-top: 15px;">
                                <div class="m-portlet__head-title">
                                    <a class="btn m-btn--pill btn-dark " href="<?php echo base_url(); ?>expense/expense_list">Expense List</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body" style="padding-top:15px">
                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <form action="" method="post" id="expense_form">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 m-form__control">
                                            <label for="">Category</label>
                                            <select name="cat_id" required onChange="getSubCategory(this.value);" class="form-control selectpicker" data-live-search="true" id="m_form_status">
                                                <option selected disabled value=''>--select one--</option>
                                                <?php
                                                foreach ($categories_list as $value)
                                                {
                                                    ?>
                                                    <option value="<?php echo $value['id']; ?>">
                                                        <?php echo $value['category_name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 m-form__control">
                                            <label for="">SubCategory</label>
                                            <select type="text" id="subcategory_list" class="form-control"  name="subcat_id"  required>
                                                <option disabled selected value="">--select one--</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 m-form__control">
                                            <label for="">Expense Date</label>
                                            <input type="date" class="form-control" name="date" required>
                                        </div>
                                    </div>
                                    <div class="row align-items-center" style="margin-top: 25px;">
                                        <div class="col-lg-2 m-form__control">
                                            <label for="">Quantity</label>
                                            <input type="text" value="1" name="quantity" class="form-control" required>
                                        </div>
                                        <div class="col-lg-2 m-form__control">
                                            <label for="">Type</label>
                                            <select required class="form-control selectpicker" name="type" data-live-search="true">
                                                <option selected disabled value=''>--select one--</option>
                                                <?php
                                                foreach ($type_list as $value)
                                                {
                                                    ?>
                                                    <option value="<?php echo $value['id']; ?>">
                                                        <?php echo $value['name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 m-form__control">
                                            <label>Amount</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control m-input" name="amount" placeholder="Amount" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="la la-inr" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 m-form__control">
                                            <label>Upload Reciept</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="custom_file" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    Choose file
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center" style="margin-top: 25px;">
                                        <div class="col-lg-4 m-form__control">
                                            <label for="">Account</label>
                                            <select required  name="account" class="form-control selectpicker">
                                                <option selected disabled value=''>--select one--</option>
                                                <?php
                                                foreach ($payment_mode as $value)
                                                {
                                                    ?>
                                                    <option value="<?php echo $value['id']; ?>">
                                                        <?php echo $value['bank_name'].'-'.$value['account_number']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 m-form__control">
                                            <label for="">Payment Type</label>
                                            <select required class="form-control selectpicker" name="payment_type">
                                                <option selected disabled value=''>--select one--</option>
                                                <?php
                                                foreach ($payment_type as $value)
                                                {
                                                    ?>
                                                    <option value="<?php echo $value['id']; ?>">
                                                        <?php echo $value['name'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 25px;">
                                        <div class="col-lg-8 m-form__control">
                                            <label>Remark</label>
                                            <textarea class="form-control m-input m-input--air" name="remark" id="exampleTextarea" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row align-items-center offset-5" style="margin-top: 25px;">
                                        <input type="reset" class="btn m-btn--pill btn-lg btn-invert" value="Reset">&nbsp;&nbsp;&nbsp;
                                        <input type="submit" class="btn m-btn--pill btn-lg btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Add category model --------------------------------------------------->



<?php $this->load->view('includes/footer'); ?>
<script>
    $(window).on('load', function ()
    {
        $('body').removeClass('m-page--loading');
    });

    function getSubCategory(cat)
    {
        $.ajax({
            url: '<?php echo base_url(); ?>Expense/getSubCategories',
            type: 'POST',
            data: {cat_id: cat},
            success: function (data)
            {
                $('#subcategory_list').html(data);
            }
        });
    }
    
    $('#expense_form').submit(function(e){
        e.preventDefault();
        $('#preloader').css("display", "block");
        var formData = new FormData(this);
        $.ajax({
            url: '<?php echo base_url(); ?>Expense/createExpense',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data)
            {
                data=JSON.parse(data);
                if(data.code==1)
                {
                    $('#preloader').css("display", "none");
                    swal({title: "Success", text: data.response, type: "success", confirmButtonClass: "btn btn-primary m-btn m-btn--wide"}).then(function () {
                        location.reload();
                    });
                }
                else
                {
                    $('#preloader').css("display", "none");
                    swal({title:"Error",text:data.response,type:"error",confirmButtonClass:"btn btn-primary m-btn m-btn--wide"});
                }
            }
        });
    });

</script>
