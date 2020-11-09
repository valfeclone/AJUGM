const json = {
    "Category": [
        {
            "Arjuna": ["Homeless Media", "Comic Strip", "Podcast"]
        },
        {
            "Kresna": ["Film Fiksi", "Movie Scoring", "Film Dokumenter", "Penulisan Naskah"]
        },
        {
            "Prahasta": ["PR Campaign", "Press Conference", "Risk Management"]
        },
        {
            "Nakula": ["Riset Strategis Akademik", "Fun Research"]
        },
        {
            "Sadewa": ["Social Media Activation", "Unconventional Media", "Brandbook", "Skip Ad"]
        }
    ]
    
}

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
                    <input type="text" placeholder="Name" name="member-name-${n+1}" class="input width-60" required>
                    <input type="text" placeholder="Faculty / Major" name="member-faculty-${n+1}" class="input width-60" required>
                    <label for="file-upload" class="input width-60 input-file-label" accept=".jpg,.jpeg,.png">Upload KTM</label>
                    <input type="file" placeholder="Upload KTM" name="member-ktm-${n+1}" id="file-upload" required>
                    <input type="email" placeholder="E-mail" name="member-email-${n+1}" class="input width-60" required>
                    <input type="text" placeholder="Linked In" name="member-linkedin-${n+1}" class="input width-60" required>
                </div>
            </div>`);
        n++;
        if (n === 4) {
            $(this).css({'display': 'none', 'visibility': 'hidden'});
        }
    });

    // Event listener for Select / Dropdown
    window.addEventListener('click', function(e) {
        for (const select of document.querySelectorAll('.select')) {
            if (!select.contains(e.target)) {
                select.classList.remove('open');
            }
        }
    });

    for (const dropdown of document.querySelectorAll(".select-wrapper")) {
        dropdown.addEventListener('click', function() {
            this.querySelector('.select').classList.toggle('open');
        })
    }

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

    // Event listener to change the competition dropdown options based on category
    $("#select-cat").bind('DOMSubtreeModified', function() {

        var $category = $("#opt-cat .selected");
        var key = $category.data().value;
        var vals = [];
                            
        switch(key) {
            case 'Arjuna':
                vals = json.Category[0].Arjuna;
                break;
            case 'Kresna':
                vals = json.Category[1].Kresna;
                break;
            case 'Prahasta':
                vals = json.Category[2].Prahasta;
                break;
            case 'Nakula':
                vals = json.Category[3].Nakula;
                break;
            case 'Sadewa':
                vals = json.Category[4].Sadewa;
                break;
            default:
                vals = ['Please choose from above'];
        }

        var $competition = $("#opt-comp");
        $competition.empty();

        $.each(vals, function(index, value) {
            $competition.append(`<span class="select-option" data-value="${value}">${value}</span>`);
        });

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
    });
    
    // Event listener for 'Next' button in Registration Page
    $('#nextStepButton').click(() => {
        if (!$('.register-detail-card').hasClass('show')) {
            $('.register-detail-card').addClass('show');
            $('.register__geometry--square').addClass('show');
            $('.register__geometry--circle').addClass('show');
        }
    })
    
});

