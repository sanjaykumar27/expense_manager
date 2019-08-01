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
                                        Account Detail
                                    </h3>
                                </div>
                            </div>
                            <div style="text-align: right; vertical-align: middle;padding-top: 15px;">
                                <div class="m-portlet__head-title">
                                    <a class="btn m-btn--pill btn-dark " href="<?php echo base_url(); ?>dashboard/accounts">Account List</a>
                                    <a class="btn m-btn--pill btn-dark " href="<?php echo base_url(); ?>dashboard/accounts">Account Transaction</a>
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
                                                <td style="font-size: 16px"><strong><?php echo $account_details['first_name'].' '.$account_details['last_name']; ?></strong></td>
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
        });
    </script>