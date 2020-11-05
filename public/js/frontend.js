$(document).ready(() => {
    // Event listener for 'Add Team Member' button in Registration Page
    let n = $('.collapsible').length;

    $("#addTeamMember").click(function() {
        $(".register-detail-inputs").append(`
            <div class="collapsible">
                <button class="collapsible__button collapsed" type="button" data-toggle="collapse" data-target="#collapse${n+1}" aria-expanded="true" aria-controls="collapse${n+1}">
                    <p class="text-regular text-black">Member ${n+1}</p>
                    <span class="collapsible__arrow"></span>
                </button>
                <div class="collapse" id="collapse${n+1}" data-parent="#accordion">
                    <input type="text" placeholder="Name" name="member-name-${n+1}" class="input width-60">
                    <input type="text" placeholder="Faculty" name="member-faculty-${n+1}" class="input width-60">
                    <input type="text" placeholder="Major" name="member-major-${n+1}" class="input width-60">
                    <label for="file-upload" class="input width-60 input-file-label" accept=".jpg,.jpeg,.png">Upload KTM</label>
                    <input type="file" placeholder="Upload KTM" name="member-ktm-${n+1}" id="file-upload">
                    <input type="email" placeholder="E-mail" name="member-email-${n+1}" class="input width-60">
                    <input type="text" placeholder="Linked In" name="member-linkedin-${n+1}" class="input width-60">
                </div>
            </div>`);
        n++;
        if (n === 4) {
            $(this).css({'display': 'none', 'visibility': 'hidden'});
        }
    });

    // Event listener for Select / Dropdown
    $('.select-wrapper').click(() => {
        $('.select').toggleClass('open');
    })

    for (const option of document.querySelectorAll(".select-option")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                if (this.parentNode.querySelector('.select-option.selected') != null) {
                    this.parentNode.querySelector('.select-option.selected').classList.remove('selected');
                }
                this.classList.add('selected');
                this.closest('.select').querySelector('.select__trigger span').textContent = this.textContent;
            }
        })
    }

    // Event listener for 'Next' button in Registration Page
    $('#nextStepButton').click(() => {
        if (!$('.register-detail-card').hasClass('show')) {
            $('.register-detail-card').addClass('show');
            $('.register__geometry--square').addClass('show');
            $('.register__geometry--circle').addClass('show');
        }
    })
    
});

