@extends('layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content card">
            <div class="container card-body">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <h4 class="box-title mb-2">Trạng thái</h4>
                    </div>
                    <div class="col-8">
                        <div class="button-block">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
                                <i class="fa fa-plus fa-sm"></i>
                                Trạng thái
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8">
                        <div class="col-sm-12 col-md-4">
                            <div class="dataTables_length d-flex align-items-center" id="tableAll_length">
                                <span class="me-3">Xem </span>
                                <select name="tableAll_length" aria-controls="tableAll" class="custom-select custom-select-sm form-control form-control-sm w-25 me-3">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span>mục</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-md-12 d-flex justify-content-end align-items-center">
                            <span class="">Tìm:</span>
                            <input type="search" class="custom-input form-control ms-2 flex-grow-1" placeholder="Tìm kiếm">
                        </div>
                    </div>
                </div>
                <!-- table  -->
                <div class="row mb-4 mt-5">
                    <div class="col-sm-12 mb-2">
                        <table id="tableAll" class="table table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="tableAll_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" aria-controls="tableAll" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID
                                </th>
                                <th class="sorting" aria-controls="tableAll" aria-label="Tên danh mục : activate to sort column ascending">Tên trạng thái
                                </th>
                                <th class="sorting col-6">Mô tả</th>
                                <th class="col-3">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">1</td>
                                <td>Design</td>
                                <td>Mô tả 1</td>
                                <td class="d-flex flex-row justify-content-between">
                                    <button type="button" class="btn btn-outline-primary mb-1">Xem</button>
                                    <button type="button" class="btn btn-outline-warning mb-1">Sửa</button>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1">2</td>
                                <td>Developer</td>
                                <td>Mô tả 1</td>
                                <td class="d-flex flex-row justify-content-between">
                                    <button type="button" class="btn btn-outline-primary mb-1">Xem</button>
                                    <button type="button" class="btn btn-outline-warning mb-1">Sửa</button>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">3</td>
                                <td>Test</td>
                                <td>Mô tả 1</td>
                                <td class="d-flex flex-row justify-content-between">
                                    <button type="button" class="btn btn-outline-primary mb-1">Xem</button>
                                    <button type="button" class="btn btn-outline-warning mb-1">Sửa</button>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1">4</td>
                                <td>Finish</td>
                                <td>Mô tả 1</td>
                                <td class="d-flex flex-row justify-content-between">
                                    <button type="button" class="btn btn-outline-primary mb-1">Xem</button>
                                    <button type="button" class="btn btn-outline-warning mb-1">Sửa</button>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div id="tableAll_processing" class="dataTables_processing card" style="display: none;"><i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i><span> Đang xử lý ...</span>
                        </div>
                    </div>
                </div>
                <!-- / table  -->
                <div class="row">
                    <div class="col-10">
                        <div class="dataTables_info" id="tableAll_info" role="status" aria-live="polite">Đang xem 1 đến 4 trong tổng số 4 mục
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="dataTables_paginate paging_simple_numbers" id="tableAll_paginate">
                            <ul class="pagination align-items-center">
                                <li class="paginate_button page-item previous disabled" id="tableAll_previous"><a href="#" aria-controls="tableAll" data-dt-idx="0" tabindex="0" class="page-link">Trước</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="tableAll" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="tableAll_next">
                                    <a href="#" aria-controls="tableAll" data-dt-idx="2" tabindex="0" class="page-link">Tiếp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Trạng thái sản phẩm</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <div class="mb-2">
                        <label>Tên trạng thái</label>
                        <input id="txtname" class="form-control" placeholder=" " aria-label="Nhãn dán" type="text">
                    </div>
                    <div class="mb-2">
                        <label>Mô tả</label>
                        <textarea id="txtdesc" class="form-control" aria-label="nhập label" rows="3"></textarea>
                    </div>
                    <div class="mt-2 text-center">
                        <button type="button" id="btnsave" class="btn btn-primary" data-id="0"><i class="ti-save"></i>&nbsp;Thêm</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
