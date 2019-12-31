<?php $this->load->view('includes/header'); ?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader">
        <div class="d-flex align-items-center">
            <div class="mr-auto ">
                <h3 class="m-subheader__title d-lg-none d-md-none d-sm-none">
                    Account Details 
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
                                    Account Detail 
                                </h3>
                            </div>
                        </div>
                        <div style="text-align: right; vertical-align: middle;padding-top: 15px;">
                            <div class="m-portlet__head-title">
                                <a class="btn m-btn--pill btn-dark " href="<?php echo base_url(); ?>account/account_list">Account List</a>
                                <a class="btn m-btn--pill btn-dark " data-target="#m_modal_add_category" data-toggle="modal" href="#">Account Transaction</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body" style="padding-top:15px">
                        <!--begin: Search Form -->
                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                            <div class="row align-items-center" style="margin-bottom: 50px;">
                                <div class="row col-lg-12  m-row--col-separator-xl">
                                    <table class="table table-sm table-borderless">
                                        <tr>
                                            <td width="10%">Owner Name:</td>
                                            <td style="font-size: 16px"><strong><?php echo $account_details['first_name'] . ' ' . $account_details['last_name']; ?></strong></td>
                                            <td width="10%">Type:</td>
                                            <td style="font-size: 16px"><strong><?php echo $account_details['account_type']; ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td width="10%">Name:</td>
                                            <td style="font-size: 14px"><strong><?php echo $account_details['bank_name']; ?></strong></td>
                                            <td width="10%">Ifsc Code:</td>
                                            <td style="font-size: 14px"><strong><?php echo $account_details['ifsc_code']; ?></strong></td>
                                        </tr>
                                    </table>
                                    <div class="m-widget1 col-lg-4">
                                        <p class="m-badge m-badge--primary m-badge--wide">Previous Month - March</p>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Spent
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Money i.e Spent on expense
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-brand">
                                                        +$17,800
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Balance
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Current Balance in Account
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-danger">
                                                        +1,800
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Liabilities
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Amount to be paid / loan
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-success">
                                                        -27,49%
                                                    </span>
                                                </div>
                                            </div>
                                        </div><hr>
                                        <table class="table table-sm" style="margin-top: 10px;font-size: 13px">
                                            <tr>
                                                <td>ATM Withdrawel</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                                <td>Card Swipe</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                            </tr>
                                            <tr>
                                                <td>Netbanking</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                                <td>Cash</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="m-widget1 col-lg-4">
                                        <p class="m-badge m-badge--success m-badge--wide">This Month - April</p>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Spent
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Money i.e Spent on expense
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-brand">
                                                        +$17,800
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Balance
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Current Balance in Account
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-danger">
                                                        +1,800
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Liabilities
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Amount to be paid / loan
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-success">
                                                        -27,49%
                                                    </span>
                                                </div>
                                            </div>
                                        </div><hr>
                                        <table class="table table-sm" style="margin-top: 10px;font-size: 13px">
                                            <tr>
                                                <td>ATM Withdrawel</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                                <td>Card Swipe</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                            </tr>
                                            <tr>
                                                <td>Netbanking</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                                <td>Cash</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="m-widget1 col-lg-4">
                                        <p class="m-badge m-badge--warning m-badge--wide">Total</p>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Spent
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Money i.e Spent on expense
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-brand">
                                                        +$17,800
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Balance
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Current Balance in Account
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-danger">
                                                        +1,800
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">
                                                        Liabilities
                                                    </h3>
                                                    <span class="m-widget1__desc">
                                                        Amount to be paid / loan
                                                    </span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-success">
                                                        -27,49%
                                                    </span>
                                                </div>
                                            </div>
                                        </div><hr>
                                        <table class="table table-sm" style="margin-top: 10px;font-size: 13px">
                                            <tr>
                                                <td>ATM Withdrawel</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                                <td>Card Swipe</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                            </tr>
                                            <tr>
                                                <td>Netbanking</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                                <td>Cash</td>
                                                <td><span class="m-badge m-badge--light m-badge--bordered m-badge-bordered--brand">4</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div >
                            <div class="m_datatable" id="local_data"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

</div>

<div class="modal fade" id="m_modal_add_category" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="add_transaction" style="margin-bottom: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Accounts Transaction
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="imaging_date" class="col col-form-label">
                                    Transaction Type
                                </label>
                                <input type="hidden" class="form-control" name="account_id" value="<?php echo $account_details['account_id']?>">
                                <div class="col">
                                    <select class="form-control selectpicker" name="transaction_type" required>
                                        <option value="" selected disabled>--Select Option--</option>
                                        <option value="Credit">Credit</option>
                                        <option value="Debit">Debit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="imaging_date" class="col col-form-label">
                                    Transaction Date
                                </label>
                                <div class="col">
                                    <input class="form-control m-input" type="date" name="transaction_date" value="<?php echo date('Y-m-d'); ?>" id="example-date-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="imaging_date" class="col col-form-label">
                                    Amount
                                </label>
                                <div class="col">
                                    <input required type="number" name="transaction_amount" class="form-control" placeholder="Enter Amount...">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="imaging_date" class="col col-form-label">
                                    Transaction Method
                                </label>
                                <div class="col">
                                    <select class="form-control selectpicker" name="account_type" onChange="checkType(this.value)" required>
                                        <option value="" selected disabled>--Select Option--</option>
                                        <?php foreach ($transaction_type as $value) { ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group m-form__group">
                                <label for="imaging_date" class="col col-form-label">
                                    Transaction Details
                                </label>
                                <div class="col">
                                    <textarea class="form-control" name="transaction_details"></textarea>
                                </div>
                            </div>
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
    var sampledata = {};
    sampledata = '<?php echo empty($accounts) ? '{}' : json_encode($accounts) ?>';

    $(window).on('load', function ()
    {
        $('body').removeClass('m-page--loading');
    });

    
    function checkType(typeid)
    {
        if(typeid == 25)
        {
            
        }
        else
        {
            
        }
    }
        
    $(function ()
    {
        var DatatableDataLocalDemo = {
            init: function ()
            {
                var e, a, i;
                e = JSON.parse(sampledata), a = $(".m_datatable").mDatatable({
                    data: {
                        type: "local",
                        source: e,
                        pageSize: 10
                    },
                    layout: {
                        theme: "default",
                        class: "",
                        scroll: !1,
                        footer: !1
                    },
                    sortable: !0,
                    pagination: !0,
                    search: {
                        input: $("#generalSearch")
                    },
                    columns: [{
                            field: "account_owner",
                            title: "Owner"

                        }, {
                            field: "bank_name",
                            title: "Bank"

                        }, {
                            field: "name",
                            title: "Type"

                        }, {
                            field: "Edit",
                            width: 50,
                            title: "Actions",
                            sortable: !1,
                            overflow: "visible",
                            template: function (e, a, i)
                            {
                                return '<a href="<?php echo base_url(); ?>dashboard/accountDetails/' + [e.id] + '" id="expense_edit" class="btn m-btn--pill btn-primary">View</a>'
                            }
                        }]
                }), i = a.getDataSourceQuery(), $("#m_form_status").on("change", function ()
                {
                    a.search($(this).val(), "category_name")
                }).val(void 0 !== i.Status ? i.Status : ""), $("#m_form_type").on("change", function ()
                {
                    a.search($(this).val(), "status")
                }).val(void 0 !== i.status ? i.Status : ""), $("#m_form_status, #m_form_type").selectpicker()
            }
        };
        jQuery(document).ready(function ()
        {
            DatatableDataLocalDemo.init()
        });
        
        
        
        $('#add_transaction').submit(function (e) {
            e.preventDefault();
            $('#preloader').css("display", "block");
            var formData = new FormData(this);
            $.ajax({
                url: '<?php echo base_url(); ?>account/createTransaction',
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
    });
</script>