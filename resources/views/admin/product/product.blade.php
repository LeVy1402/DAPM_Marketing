@extends('layout.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class=" d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="h4 m-0 box-title mr-2">Sản phẩm</span>
                        <button type="button" class="btn btn-primary ms-2" data-toggle="modal"
                                data-target="#ModalAdd"><i class="fa fa-plus fa-sm"></i> Sản phẩm
                        </button>
                    </div>
                    <div>
                        <div class="d-flex align-items-center">
                            <label class="mb-0 mr-2">Trạng thái:</label>
                            <div class="ms-2">
                                <select id="_listSelectStatus" class="form-control">
                                    <option value="">Tất cả</option>
                                    <option value="United States">Đã bán</option>
                                    <option value="United Kingdom">Đang bán</option>
                                    <option value="Afghanistan">Ngưng bán</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th class="col-5">Mô tả</th>
                        <th>Giá bán</th>
                        <th>Giá sale</th>
                        <th>Trạng thái</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <tr class="align-content-center">
                        <td>Albert Cook</td>
                        <td>
                            <p class="text-wrap overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum doloremque id illum
                                molestiae nihil omnis qui quis repudiandae suscipit <temporibus class=""></temporibus></p>
                        </td>
                        <td>19,000,000 VNĐ</td>
                        <td>19,000,000 VNĐ</td>
                        <td>
                            <span class="badge bg-label-primary me-1">Đã bán</span>
                        </td>
                        <td>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Sản phẩm </strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-sm-4">
                            <div class="mb-1">
                                <label class="control-label">Danh mục sản phẩm</label>
                                <select id="_dsinsertdanhmuc" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="mb-1">
                                <label class="control-label">Sản phẩm <span class="text-danger">(*)</span></label>
                                <input id="txtname" class="form-control mb-1" placeholder="Tên sản phẩm" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-1">
                                <label class="control-label">Trạng thái</label>
                                <select id="_liststatus" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="control-label">Mã lô <span class="text-danger">(*)</span></label>
                            <input id="txtmalo" class="form-control mb-1" placeholder="" type="text">
                        </div>
                        <div class="col-3">
                            <label class="control-label">Giá bán</label>
                            <input id="txtgiaban" class="form-control mb-1 inputNumber" type="text" value="0">
                        </div>
                        <div class="col-3">
                            <label class="control-label">Hoa hồng</label>
                            <input id="txthoahong" class="form-control mb-1 inputNumber" type="text" value="0">
                        </div>

                        <div class="col-6">
                            <label class="control-label">Địa chỉ</label>
                            <input id="txtdiachi" class="form-control mb-1" type="text">
                        </div>
                        <div class="col-4">
                            <label class="control-label">Diện tích</label>
                            <input id="txtdientich" class="form-control mb-1 inputNumber" type="text">
                        </div>
                        <div class="col-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cbHot">
                                <label class="custom-control-label" for="cbHot">Sản phẩm hot</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <label class="control-label">Thông tin thêm</label>
                                <textarea id="txtinformation" class="form-control mb-1" placeholder="Thông tin thêm" rows="2"></textarea>
                            </div>
                            <div class="mb-1">
                                <label class="control-label">Mô tả</label>
                                <textarea id="txtdesc" class="form-control mb-1" placeholder="Mô tả" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Hình ảnh/Video</label>
                                <div class="fileupload">
                                    <div class="fileupload_dropzone">
                                        <input id="uploadfile" type="file" accept=".jpg, .png, image/jpeg, image/png, .mp4, .mov, .mkv" class="inputupload" name="files" multiple="">
                                    </div>
                                    <div id="fileupload_listupload-file"></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-2">
                                <label class="control-label">Nhu cầu sản phẩm(Nhãn)</label>
                                <select id="_listlable" data-placeholder="Chọn Nhãn" multiple="" class="standardSelect" tabindex="-1" style="display: none;">
                                </select><div class="chosen-container chosen-container-multi" title="" id="_listlable_chosen" style="width: 100%;"><ul class="chosen-choices">
                                        <li class="search-field">
                                            <input class="chosen-search-input default" type="text" autocomplete="off" value="Chọn Nhãn" tabindex="1" style="width: 107px;">
                                        </li>
                                    </ul>
                                    <div class="chosen-drop">
                                        <ul class="chosen-results"></ul>
                                    </div></div>
                            </div>
                        </div>
                        <div class="col-12 d-none">
                            <div class="mb-2">
                                <label class="control-label">Nhu cầu công việc</label>
                                <select id="_listtodos" data-placeholder="Chọn nhu cầu công việc" multiple="" class="standardSelect" tabindex="-1" style="display: none;">
                                </select><div class="chosen-container chosen-container-multi" title="" id="_listtodos_chosen" style="width: 100%;"><ul class="chosen-choices">
                                        <li class="search-field">
                                            <input class="chosen-search-input default" type="text" autocomplete="off" value="Chọn nhu cầu công việc" tabindex="1" style="width: 201px;">
                                        </li>
                                    </ul>
                                    <div class="chosen-drop">
                                        <ul class="chosen-results"></ul>
                                    </div></div>
                            </div>
                        </div>
                        <div class="col-sm-12"></div>
                        <div class="col-sm-12"></div>
                        <div class="col-sm-12"></div>
                        <div class="col-sm-12">
                        </div>
                        <div class="col-6">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Hủy</button>
                    <button id="btnsave" data-id="0" type="button" class="btn btn-primary waves-effect waves-light save-category">Lưu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
