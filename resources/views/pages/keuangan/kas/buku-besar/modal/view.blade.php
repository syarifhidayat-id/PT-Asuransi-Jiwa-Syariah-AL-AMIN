<div class="modal fade" id="modalView" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-950px">
        <div class="modal-content">
            <div class="modal-header" id="modalView_header">
                <h4 class="fw-bolder" id="tModView"></h4>
                <button type="button" class="btn btn-icon btn-sm btn-active-light-primary" onclick="closeModal('modalView')"><i class="fa-sharp fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body" id="modal-body">
                <embed id="view_pdf" src="" type="application/pdf" width="100%" height="500">
            </div>
           
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-light btn-sm" onclick="closeModal('modalView')">Close</button>
                    {{-- <button type="button" class="btn btn-danger btn-sm" onclick="close_pojk()"><i
                            class="fa-solid fa-xmark" ></i> Tutup</button> --}}
                </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
