@extends('layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h4 class="card-header">Chỉnh sửa sản phẩm</h4>
            <div class="container">
                <div class="mb-2">
                    <label>Tên sản phẩm</label>
                    <input id="txtname" class="form-control" placeholder=" " aria-label="Nhãn dán" type="text">
                </div>
                <div class="mb-2">
                    <label>Mô tả</label>
                    <textarea id="txtdesc" class="form-control" aria-label="nhập label" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Giá bán</label>
                        <input id="txtname" class="form-control" placeholder=" " aria-label="Nhãn dán" type="text">
                    </div>
                    <div class="col">
                        <label>Giá sale</label>
                        <input id="txtname" class="form-control" placeholder=" " aria-label="Nhãn dán" type="text">
                    </div>
                </div>
                <div class="mb-2">
                    <label>Danh mục</label>
                    <select id="timeZones" class="select2 form-select">
                        <option value="">Mobile</option>
                        <option value="-12">Website</option>
                        <option value="-12">Phần mềm</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label>Trạng thái</label>
                    <select id="timeZones" class="select2 form-select">
                        <option value="">Đang bán</option>
                        <option value="-12">Đã bán</option>
                    </select>
                </div>
                <div class="mt-3 mb-4 text-center">
                    <button type="button" id="btnBack" class="btn btn-secondary" data-id="0"><i class="ti-save"></i>Trở lại
                    </button>
                    <button type="button" id="btnSave" class="btn btn-primary" data-id="0"><i class="ti-save"></i>Lưu
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
