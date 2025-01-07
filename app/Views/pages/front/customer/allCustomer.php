<?= $this->extend('templates/front/index') ?>

<?= $this->section('content') ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Customers</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<!-- end page title -->
<div class="row">
    <div class="col-3">
        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-3 " data-bs-toggle="modal" data-bs-target="#customer">
            <i class="mdi mdi-plus me-1"></i> New Customers
        </button>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="customers" class="table align-middle table-nowrap display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Register Date</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<!-- end main content-->

<!-- Modal -->
<div class="modal fade" id="customer" tabindex="-1" aria-labelledby="customerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customerLabel">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="customerForm">
                <?= csrf_field() ?> 
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email ID">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" id="phone" name="mobile" placeholder="Mobile Number">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Address" rows="3"></textarea>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <label class="form-label">Order Frequency</label>
                            <div class="d-flex align-items-center">
                                <div class="form-check form-radio-outline form-radio-primary me-3">
                                    <input class="form-check-input" type="radio" name="order_frequency" id="daily" value="daily">
                                    <label class="form-check-label" for="daily">
                                        Daily
                                    </label>
                                </div>

                                <div class="form-check form-radio-outline form-radio-primary">
                                    <input class="form-check-input" type="radio" name="order_frequency" id="sometimes" value="sometimes">
                                    <label class="form-check-label" for="sometimes">
                                        Sometimes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addCustomer">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#customers').DataTable({
            bProcessing: true,
            serverSide: false,
            stateSave: true,
            scrollCollapse: true,
            // bSortable: true,
            ajax: {
                url: '<?= base_url('allCustomer') ?>',
                type: "GET",
            },
            columns: [{
                    data: "id"
                },
                {
                    data: "customer"
                },
                {
                    data: "mobile"
                },
                {
                    data: "address"
                },
                {
                    data: "status"
                },
                {
                    data: "action"
                },
                {
                    data: "created_date"
                },
            ],
            order: [
                [0, 'desc']
            ]
        });

        //Add New Customer
        $("#addCustomer").click(function() {
            var formData = $('#customerForm').serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('addCustomer') ?>',
                data: formData + '&status=active',
                dataType: "JSON", 
                //display while ajax load
                beforeSend: function() {
                    // alert('wait');
                },
                success: function(result) {
                    setTimeout(() => {
                        $('#regenerate i').removeClass('fa-spin');
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: result,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }, 1500);
                    // Reset the form
                    $('#customerForm')[0].reset();

                    // Reload or redraw the DataTable
                    $('#customers').DataTable().ajax.reload(null, false);
                    $('#customer').modal('hide');
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>