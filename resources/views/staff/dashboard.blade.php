@extends('layout.app')
@section('content')

    <!-- Content wrapper -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Đã bỏ lỡ</span>
                                <h3 class="card-title mb-2">1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Đang chờ xử lí</span>
                                <h3 class="card-title mb-2">1</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Đang thực hiện</span>
                                <h3 class="card-title mb-2">1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Đã hoàn thành tốt</span>
                                <h3 class="card-title mb-2">1</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Demand Table -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4 card">
            <div class="card-body">
                <h4 class="box-title">Nhu cầu trong tháng 6/2022</h4>
                <div id="tableAll_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row mb-4">
                        <div class="col-sm-12 col-md-4">
                            <div class="dataTables_length d-flex align-items-center" id="tableAll_length">
                                <span class="me-3">Xem </span>
                                <select name="tableAll_length" aria-controls="tableAll"
                                        class="custom-select custom-select-sm form-control form-control-sm w-25 me-3">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span>mục</span>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex justify-content-end align-items-center">
                            <span class="">Tìm:</span>
                            <input type="search" class="custom-input ms-2 flex-grow-1" placeholder="Tìm kiếm">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12 mb-2">
                            <table id="tableAll" class="table table-striped dataTable" style="width: 100%;"
                                   role="grid" aria-describedby="tableAll_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" aria-controls="tableAll" aria-sort="ascending"
                                        aria-label="Công việc: activate to sort column descending">Nhu cầu
                                    </th>
                                    <th class="sorting" aria-controls="tableAll"
                                        aria-label="Mô tả : activate to sort column ascending">Mô tả
                                    </th>
                                    <th class="sorting" aria-controls="tableAll"
                                        aria-label="Ngày: activate to sort column ascending">Ngày
                                    </th>
                                    <th class="text-nowrap sorting" aria-controls="tableAll"
                                        aria-label="Trạng thái: activate to sort column ascending">Trạng
                                        thái
                                    </th>
                                    <th class="sorting" aria-controls="tableAll"
                                        aria-label="Sản phẩm: activate to sort column ascending">Sản phẩm
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Nhu cầu 1</td>
                                    <td>Mô tả Nhu cầu</td>
                                    <td>10/06/2022</td>
                                    <td><span class="badge bg-label-primary me-1">Đang thực hiện</span></td>
                                    <td>Sản phẩm 1</td>
                                    <td style="width: 25px">
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Sửa</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Xóa</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Nhu cầu 1</td>
                                    <td>Mô tả Nhu cầu</td>
                                    <td>10/06/2022</td>
                                    <td><span class="badge bg-label-primary me-1">Đang thực hiện</span></td>
                                    <td>Sản phẩm 1</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Sửa</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Xóa</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Nhu cầu 1</td>
                                    <td>Mô tả Nhu cầu</td>
                                    <td>10/06/2022</td>
                                    <td><span class="badge bg-label-primary me-1">Đang thực hiện</span></td>
                                    <td>Sản phẩm 1</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Sửa</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Xóa</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Nhu cầu 1</td>
                                    <td>Mô tả Nhu cầu</td>
                                    <td>10/06/2022</td>
                                    <td><span class="badge bg-label-primary me-1">Đang thực hiện</span></td>
                                    <td>Sản phẩm 1</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Sửa</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i> Xóa</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                </tbody>

                            </table>
                            <div id="tableAll_processing" class="dataTables_processing card"
                                 style="display: none;"><i
                                    class="fa fa-spinner fa-pulse fa-2x fa-fw"></i><span> Đang xử lý ...</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="tableAll_info" role="status"
                                 aria-live="polite">Đang xem 1 đến 4 trong tổng số 4 mục
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="tableAll_paginate">
                                <ul class="pagination align-items-center">
                                    <li class="paginate_button page-item previous disabled"
                                        id="tableAll_previous"><a href="#" aria-controls="tableAll"
                                                                  data-dt-idx="0" tabindex="0"
                                                                  class="page-link">Trước</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="tableAll"
                                                                                    data-dt-idx="1"
                                                                                    tabindex="0"
                                                                                    class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item next disabled" id="tableAll_next">
                                        <a href="#" aria-controls="tableAll" data-dt-idx="2" tabindex="0"
                                           class="page-link">Tiếp</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- / Demand Table -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Paypal</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transfer</small>
                                    <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Credit Card</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-838.71</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- / Content wrapper -->

@endsection
