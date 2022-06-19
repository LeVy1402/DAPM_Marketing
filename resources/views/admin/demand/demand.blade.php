@extends('layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="content card">
            <div class="container card-body">
                <div class="row align-items-center justify-content-between">
                    <div class="row col-3 align-items-center">
                        <div class="col">
                            <h4 class="box-title m-0 mb-2">Nhu cầu</h4>
                        </div>
                        <div class="col">
                            <div class="button-block">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
                                    <i class="fa fa-plus fa-sm"></i>
                                    Nhu cầu
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-end">
                        <label class="mb-0 mr-2">Nhãn:</label>
                        <div class="ms-2">
                            <select id="_listSelectStatus" class="form-control">
                                <option value="">Tất cả</option>
                                <option value="United States">Đang chờ phê duyệt</option>
                                <option value="United Kingdom">Đang thực hiện</option>
                                <option value="Afghanistan">Hủy</option>
                                <option value="Afghanistan">Đã hoàn thành tốt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8">
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
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <span class="">Tìm:</span>
                        <input type="search" class="custom-input ms-2 flex-grow-1" placeholder="Tìm kiếm">
                    </div>
                </div>
                <!-- table  -->
                <div class="row mb-4 mt-2">
                    <div class="col-sm-12 mb-2">
                        <table id="tableAll" class="table table-striped dataTable" style="width: 100%;" role="grid"
                               aria-describedby="tableAll_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc">STT
                                </th>
                                <th class="sorting">Nhu cầu
                                </th>
                                </th>
                                <th class="sorting" >Mô tả
                                </th>
                                <th class="text-nowrap sorting" >Ngày bắt đầu
                                </th>
                                <th class="sorting">Ngày kết thúc
                                </th>
                                <th class="sorting">Trạng thái
                                </th>
                                <th class="sorting">Tên khách hàng
                                </th>
                                <th class="sorting">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">1</td>
                                <td>Nhu cầu 1</td>
                                <td>Mô tả 1</td>
                                <td>18/6/2022</td>
                                <td>18/12/2022/</td>
                                <td><span class="badge bg-label-primary me-1">Đang thực hiện</span></td>
                                <td>Nguyễn Văn A</td>
                                <td style="width: 25px">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-detail me-1"></i> Xem chi tiết</a>
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
                        <div id="tableAll_processing" class="dataTables_processing card" style="display: none;"><i
                                class="fa fa-spinner fa-pulse fa-2x fa-fw"></i><span> Đang xử lý ...</span>
                        </div>
                    </div>
                </div>
                <!-- / table  -->
                <div class="row">
                    <div class="col-10">
                        <div class="dataTables_info" id="tableAll_info" role="status" aria-live="polite">Đang xem 1 đến
                            1 trong tổng số 1 mục
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="dataTables_paginate paging_simple_numbers" id="tableAll_paginate">
                            <ul class="pagination align-items-center">
                                <li class="paginate_button page-item previous disabled" id="tableAll_previous"><a
                                        href="#" aria-controls="tableAll" data-dt-idx="0" tabindex="0"
                                        class="page-link">Trước</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="tableAll"
                                                                                data-dt-idx="1" tabindex="0"
                                                                                class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="tableAll_next">
                                    <a href="#" aria-controls="tableAll" data-dt-idx="2" tabindex="0" class="page-link">Tiếp</a>
                                </li>
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
                    <h5 class="modal-title"><strong>Nhu cầu</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>Tên nhu cầu</label>
                        <input id="txtname" class="form-control" placeholder=" " aria-label="Nhãn dán" type="text">
                    </div>
                    <div class="mb-2">
                        <label>Mô tả</label>
                        <textarea id="txtdesc" class="form-control" aria-label="nhập label" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Ngày bắt đầu</label>
                            <input class="form-control" type="date" id="birthday" name="birthday">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Ngày kết thúc</label>
                            <input class="form-control" type="date" id="birthday" name="birthday">
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button type="button" id="btnsave" class="btn btn-primary" data-id="0"><i class="ti-save"></i>&nbsp;Thêm</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
