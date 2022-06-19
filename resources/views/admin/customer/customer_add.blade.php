@extends('layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
        <h5 class="card-header">Khách hàng</h5>
        <!-- Account -->
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{asset('template/img/avatars/1.jpg')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Tải ảnh lên</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                    </label>
                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Xóa</span>
                    </button>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
            <form id="formAccountSettings" method="POST" onsubmit="return false">
                <h5>Thông tin cơ bản</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Họ tên</label>
                        <input class="form-control" type="text" id="firstName" name="firstName" placeholder="Trần Ngọc Hân" autofocus="">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Ngày sinh</label>
                        <input class="form-control" type="date" id="birthday" name="birthday">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="text" id="email" name="email"  placeholder="han@example.com">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Số điện thoại</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">VN (+84)</span>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="202 555 0111">
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Địa chỉ</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" placeholder="102 Trần Phú">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Ghi chú</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <h5 class="mt-3">Thông tin doanh nghiệp</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Tên doanh nghiệp</label>
                        <input class="form-control" type="text" id="firstName" name="firstName" autofocus="">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Số lượng nhân viên</label>
                        <select id="country" class="select2 form-select">
                            <option value="">Chọn</option>
                            <option value="Australia"><200</option>
                            <option value="Bangladesh"><500</option>
                            <option value="Bangladesh"><1000</option>
                            <option value="Bangladesh">>1000</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Doannh thu hàng năm</label>
                        <input class="form-control" type="text" id="email" name="email">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Website</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="https://www.bigcity.vn/">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Thêm khách hàng</button>
                    <button type="reset" class="btn btn-outline-secondary">Làm mới</button>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
    </div>
@endsection
