<?php $this->load->view('includes/header'); ?>

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
                                        Expense List
                                        <span class="text-align:right">Total Amount: &#x20B9; <strong><?php echo $total_amount; ?></strong></span>
                                    </h3>
                                </div>
                            </div>
                            <div style="text-align: right; vertical-align: middle;padding-top: 15px;">
                                <div class="m-portlet__head-title">
                                    <a class="btn m-btn--pill btn-dark " href="<?php echo base_url(); ?>expense/create_expense">Add Expense</a>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body" style="padding-top:15px">
                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="form-group m-form__group row align-items-center">
                                            <div class="col-lg-3">
                                                <div class="m-form__group m-form__group--inline">
                                                    <div class="m-form__label" style="width: 20%">
                                                        <label>
                                                            Category
                                                        </label>
                                                    </div>
                                                    <div class="m-form__control">
                                                        <select  class="form-control m-bootstrap-select" id="m_form_status">
                                                            <option value="">
                                                                All
                                                            </option>
                                                            <?php foreach ($categories_list as $value)
                                                             { ?>
                                                                 <option value="<?php echo $value['category_name']; ?>">
                                                                 <?php echo $value['category_name']; ?>
                                                                 </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-md-none m--margin-bottom-10"></div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="m-form__group m-form__group--inline">
                                                <div class="m-form__label" style="width: 20%">
                                                        <label>
                                                            SubCategory
                                                        </label>
                                                    </div>
                                                    <div class="m-form__control">
                                                        <select class="form-control m-bootstrap-select" id="m_form_status">
                                                            <option value="">
                                                                All
                                                            </option>
                                                        </select>        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="m-input-icon m-input-icon--left">
                                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                                        <span>
                                                            <i class="la la-search"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m_datatable" id="local_data"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="m_modal_show_reciept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="update_problem_list_test_form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Reciept
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add category model --------------------------------------------------->

<?php $this->load->view('includes/footer'); ?>
<script>
    var sampledata = {};
    sampledata = '<?php echo empty($all_expense) ? '{}' : json_encode($all_expense) ?>';
    
    $(window).on('load', function ()
    {
        $('body').removeClass('m-page--loading');
    });


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
                            field: "subcategory_name",
                            title: "Item Name"

                        }, {
                            field: "amount",
                            width: 80,
                            title: "Amount"

                        }, {
                            field: "quantity",
                            width: 60,
                            title: "Quantity"

                        },{
                            field: "name",
                            width: 70,
                            title: "Type"

                        }, {
                            field: "purchase_date",
                            width: 95,
                            title: "Purchase Date"
                        },{
                            field: "category_name",
                            width: 115,
                            title: "Category Name"
                        },{
                            field: "bank_name",
                            width: 110,
                            title: "Account"
                        },{
                            field: "payment",
                            width: 110,
                            title: "Payment Method"
                        },{
                            field: "remark",
                            width: 110,
                            title: "Remark"
                        }]
                }), i = a.getDataSourceQuery(), $("#m_form_status").on("change", function ()
                {
                    a.search($(this).val(), "category_name")
                }).val(void 0 !== i.Status ? i.Status : ""), $("#m_form_type").on("change", function ()
                {
                    a.search($(this).val(), "subcategory_name")
                }).val(void 0 !== i.status ? i.Status : ""), $("#m_form_status, #m_form_type").selectpicker()
            }
        };
        jQuery(document).ready(function ()
        { 
            DatatableDataLocalDemo.init()
        });
        
        $('#expense_edit').click(function(){
            alert();
        });
        
        $('.fa-paperclip').click(function (){
           alert();
        });
        
    });
</script>