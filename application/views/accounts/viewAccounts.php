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

<?php $this->load->view('includes/footer'); ?>
<script>
    var sampledata = {};
    sampledata = '<?php echo empty($accounts) ? '{}' : json_encode($accounts) ?>';

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
                            field: "account_owner",
                            title: "Owner"

                        }, {
                            field: "bank_name",
                            title: "Bank"

                        }, {
                            field: "name",
                            title: "Type"

                        },{
                            field: "Edit",
                            width: 50,
                            title: "Actions",
                            sortable: !1,
                            overflow: "visible",
                            template: function (e, a, i)
                            {
                                return '<a href="<?php echo base_url(); ?>dashboard/accountDetails/'+[e.id]+'" id="expense_edit" class="btn m-btn--pill btn-primary">View</a>'
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
    });
</script>