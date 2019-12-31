<?php $this->load->view('includes/header'); ?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader">
            <div class="d-flex align-items-center">
                <div class="mr-auto ">
                    <h3 class="m-subheader__title d-lg-none d-md-none d-sm-none">
                        Categories
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
                                        Category Master
                                    </h3>
                                </div>
                            </div>
                            <div style="text-align: right; vertical-align: middle;padding-top: 20px;">
                                <div class="m-portlet__head-title">
                                    <button class="btn m-btn--pill btn-dark btn-sm " data-target="#m_modal_add_category" data-toggle="modal">Add Category</button>
                                    <button class="btn m-btn--pill btn-dark btn-sm" data-target="#m_modal_add_subcategory" data-toggle="modal">Add Subcategory</button>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body" style="padding-top:15px">
                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="form-group m-form__group row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="m-form__group m-form__group--inline">
                                                    <div class="m-form__label" style="width: 20%">
                                                        <label>
                                                            Category Name
                                                        </label>
                                                    </div>
                                                    <div class="m-form__control">
                                                        <select class="form-control m-bootstrap-select" id="m_form_status">
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
                                            <div class="col-md-6">
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

<!-- Add category model --------------------------------------------------->
<div class="modal fade" id="m_modal_add_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="add_category_model" style="margin-bottom: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Add Category
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
                            Category Name
                        </label>
                        <div class="col-9">
                            <input required class="form-control m-input" type="text" name="category_name">
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
<div class="modal fade" id="m_modal_add_subcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="add_subcategory" style="margin-bottom: 0px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Add Subcategory
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group m-form__group row">
                        <div class="col-9">
                            <input type="hidden" name="category_id" id="cat_id">
                            <input type="hidden" name="subcategory_id" id="sub_id">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-3 col-form-label">
                            Category
                        </label>
                        <div class="col-9">
                            <select required class="form-control" id="category_id" name="category_id">
                                <option value="" selected disabled>
                                    --select one--
                                </option>
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
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="imaging_date" class="col-3 col-form-label">
                            Sub Category
                        </label>
                        <div class="col-9">
                            <input required class="form-control m-input" type="text" name="subcategory_name" id="subcategory_id">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">
                        Close
                    </button>
                    <input type="submit" id="add_subcategory"  class="btn btn-primary" value="Update Report">
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
<script>
    var sampledata = {};
    sampledata = '<?php echo empty($categories) ? '{}' : json_encode($categories) ?>';

    $(window).on('load', function ()
    {
        $('body').removeClass('m-page--loading');
    });

    function showModal(catid, subid, catname, subname)
    {
        $("#category_id").val(catname);
        $("#subcategory_id").val(subname);
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
                            field: "category_name",
                            title: "Category Name"

                        }, {
                            field: "subcategory_name",
                            title: "Sub Category Name"

                        }, {
                            field: "Actions",
                            width: 110,
                            title: "Actions",
                            sortable: !1,
                            overflow: "visible",
                            template: function (e, a, i)
                            {
                                return '\t\t\t\t\t\t<a href="javascript:void(0)" data-target="#m_modal_edit_category" data-toggle="modal" onClick="showModal("' + [e.cat_id] + '","' + [e.sub_id] + '","' + [e.category_name] + '","' + [e.subcategory_name] + '");" class="btn m-btn--pill btn-primary">Edit</a>'
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
        
        $('#add_category_model').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $('#preloader').css("display", "block");
            $.ajax({
                url: '<?php echo base_url(); ?>dashboard/addCategory',
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
    });
</script>