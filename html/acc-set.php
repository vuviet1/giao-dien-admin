
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Thiết lập tài khoản /</span> Tài khoản</h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Tài khoản</a>
                        </li>
                    </ul>
                    <div class="card mb-4">
                        <h5 class="card-header">Chi tiết hồ sơ</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img
                                    src="../assets/img/avatars/1.png"
                                    alt="user-avatar"
                                    class="d-block rounded"
                                    height="100"
                                    width="100"
                                    id="uploadedAvatar"
                                />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Cập nhật ảnh</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input
                                            type="file"
                                            id="upload"
                                            class="account-file-input"
                                            hidden
                                            accept="image/png, image/jpeg"
                                        />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Cài lại</span>
                                    </button>

                                    <p class="text-muted mb-0">Cho phép JPG, GIF hoặc PNG. Kích thước tối đa 800K</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Họ và tên đệm</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="firstName"
                                            name="firstName"
                                            value="John"
                                            autofocus
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">tên </label>
                                        <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="email"
                                            name="email"
                                            value="john.doe@example.com"
                                            placeholder="john.doe@example.com"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="organization" class="form-label">Tổ chức</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="organization"
                                            name="organization"
                                            value="ThemeSelection"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="phoneNumber">số điện thoại</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">VN (+84)</span>
                                            <input
                                                type="text"
                                                id="phoneNumber"
                                                name="phoneNumber"
                                                class="form-control"
                                                placeholder="202 555 0111"
                                            />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">Thành phố</label>
                                        <input class="form-control" type="text" id="state" name="state" placeholder="Hà Nội" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="zipCode" class="form-label">Zip Code</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="zipCode"
                                            name="zipCode"
                                            placeholder="231465"
                                            maxlength="6"
                                        />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="country">Quốc gia</label>
                                        <select id="country" class="select2 form-select">
                                            <option value="">Chọn</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Lưu thay đổi</button>
                                    <button type="reset" class="btn btn-outline-secondary">Hủy bỏ</button>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                    <div class="card">
                        <h5 class="card-header">Xóa tài khoản</h5>
                        <div class="card-body">
                            <div class="mb-3 col-12 mb-0">
                                <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Bạn có chắc là muốn cóa tài khoản hay không?</h6>
                                    <p class="mb-0">Sau khi bạn xóa tài khoản của mình, bạn sẽ không thể quay lại. Hãy chắc chắn.</p>
                                </div>
                            </div>
                            <form id="formAccountDeactivation" onsubmit="return false">
                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="accountActivation"
                                        id="accountActivation"
                                    />
                                    <label class="form-check-label" for="accountActivation"
                                    >Tôi xác nhận hủy kích hoạt tài khoản của mình</label
                                    >
                                </div>
                                <button type="submit" class="btn btn-danger deactivate-account">Hủy kích hoạt tài khoản</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

