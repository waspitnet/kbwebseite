    <!-- Customizer modal-->
    <div class="modal fade" id="customizer-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Your custom styles</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body py-4">
            <p class="mb-3">Grab the generated styles below. Wrap them inside <code>&lt;style&gt;</code> tag and put in the <code>&lt;head&gt;</code> section of your HTML document.</p>
            <p class="mb-4"><span class='fw-medium'>IMPORTANT:</span> In order for these styles to take effect you have to placed them below:<br><code>&lt;link rel=&quot;stylesheet&quot; media=&quot;screen&quot; href=&quot;assets/css/theme.min.css&quot;&gt;</code></p>
            <div class="bg-secondary overflow-hidden rounded-4">
              <pre class="text-wrap bg-transparent border-0 text-dark p-4" id="custom-generated-styles"></pre>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button" id="copy-styles-btn"><i class="ai-copy me-2 ms-n1"></i>Copy styles</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Customizer toggler--><a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none" href="#customizer" data-bs-toggle="offcanvas" style="right: -1.75rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;"><i class="ai-settings text-primary fs-base me-1 ms-n1"></i>Customize</a>
    <!-- Customizer offcanvas-->
    <div class="offcanvas offcanvas-end" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1">
      <div class="offcanvas-header border-bottom">
        <h4 class="offcanvas-title">Customize theme</h4>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex align-items-center mb-3"><i class="ai-paint-roll text-muted fs-4 me-2"></i>
          <h5 class="mb-0">Colors</h5>
        </div>
        <div class="row row-cols-3 g-3 mb-5" id="theme-colors">
          <div class="col">
            <div class="text-dark fs-sm fw-medium mb-2">Primary</div>
            <div class="color-swatch" id="theme-primary" data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="primary" style="background-color: #448c74;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#448c74">
              <input class="visually-hidden" type="color" id="primary" value="#448c74">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium mb-2">Warning</div>
            <div class="color-swatch" id="theme-warning" data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="warning" style="background-color: #edcb50;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#edcb50">
              <input class="visually-hidden" type="color" id="warning" value="#edcb50">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium mb-2">Info</div>
            <div class="color-swatch" id="theme-info" data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="info" style="background-color: #3f7fca;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#3f7fca">
              <input class="visually-hidden" type="color" id="info" value="#3f7fca">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium pt-1 mb-2">Success</div>
            <div class="color-swatch" id="theme-success" data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="success" style="background-color: #3fca90;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#3fca90">
              <input class="visually-hidden" type="color" id="success" value="#3fca90">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium pt-1 mb-2">Danger</div>
            <div class="color-swatch" id="theme-danger" data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="danger" style="background-color: #ed5050;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#ed5050">
              <input class="visually-hidden" type="color" id="danger" value="#ed5050">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mb-3"><i class="ai-align-left text-muted fs-4 me-2"></i>
          <h5 class="mb-0">Typography <span class="text-muted fs-sm fw-normal">(1rem = 16px)</span></h5>
        </div>
        <div class="mb-5">
          <div class="mb-3">
            <label class="text-dark fs-sm fw-medium pt-1 mb-2" for="font-url">Google font URL</label>
            <input class="form-control" type="url" value="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" id="font-url">
          </div>
          <div class="mb-3">
            <label class="text-dark fs-sm fw-medium pt-1 mb-2" for="body-font-family">Font family</label>
            <input class="form-control" type="text" value="'Inter', sans-serif" id="body-font-family">
          </div>
          <div class="row row-cols-2">
            <div class="col mb-3">
              <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="root-font-size">Root font size, rem</label>
              <select class="form-select" id="root-font-size">
                <option value=".75rem">.75</option>
                <option value=".875rem">.875</option>
                <option value="1rem" selected>1</option>
                <option value="1.05rem">1.05</option>
                <option value="1.1rem">1.1</option>
                <option value="1.15rem">1.15</option>
                <option value="1.25rem">1.25</option>
                <option value="1.375rem">1.375</option>
              </select>
            </div>
            <div class="col mb-3">
              <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="body-font-size">Body font size, rem</label>
              <select class="form-select" id="body-font-size">
                <option value=".75rem">.75</option>
                <option value=".875rem">.875</option>
                <option value="1rem" selected>1</option>
                <option value="1.15rem">1.15</option>
                <option value="1.25rem">1.25</option>
                <option value="1.375rem">1.375</option>
              </select>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-n2 mb-3"><i class="ai-maximize text-muted fs-5 me-2"></i>
          <h5 class="mb-0">Borders / Rounding</h5>
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-width">Border width, px</label>
          <input class="form-control" type="number" min="0" step="1" value="1" id="border-width">
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius">Rounded base, rem</label>
          <input class="form-control" type="number" min="0" step=".05" value="1" id="border-radius">
        </div>
        <div id="theme-border-radiuses">
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-sm">
              Rounded SM<span class='text-muted fw-normal ms-1'> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value=".75" id="border-radius-sm">
          </div>
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-lg">
              Rounded LG<span class='text-muted fw-normal ms-1'> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value="1.125" id="border-radius-lg">
          </div>
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-xl">
              Rounded XL<span class='text-muted fw-normal ms-1'> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value="1.5" id="border-radius-xl">
          </div>
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-2xl">
              Rounded 2XL<span class='text-muted fw-normal ms-1'> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value="2.25" id="border-radius-2xl">
          </div>
        </div>
      </div>
      <div class="offcanvas-header border-top d-none" id="customizer-btns">
        <button class="btn btn-secondary w-100 me-3" type="button" id="customizer-reset-btn"><i class="ai-undo fs-lg me-2 ms-n1"></i>Reset</button>
        <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#customizer-modal"><i class="ai-code-curly fs-lg me-2 ms-n1"></i>Show styles</button>
      </div>
    </div>