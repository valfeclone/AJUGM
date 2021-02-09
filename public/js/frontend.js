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

    $('.header__hamburger').click(function() {
        $('.header').toggleClass('responsive');
    })
    
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
                    <input type="text" placeholder="Name" name="member-name-${n+1}" class="input width-60 no-symbols" required>
                    <input type="text" placeholder="Faculty" name="member-faculty-${n+1}" class="input width-60 no-symbols" required>
                    <input type="text" placeholder="Major" name="member-major-${n+1}" class="input width-60 no-symbols" required>
                    <label for="file-upload-${n+1}" class="input width-60 input-file-label">Upload KTM  <span>+</span></label>
                    <input type="file" placeholder="Upload KTM" name="member-ktm-${n+1}" id="file-upload-${n+1}" class="ktm" accept=".jpg,.jpeg,.png">
                    <input type="email" placeholder="E-mail" name="member-email-${n+1}" class="input width-60" required>
                    <input type="text" placeholder="LinkedIn (opsional)" name="member-linkedin-${n+1}" class="input width-60 linkedin">
                </div>
            </div>`);
        n++;
        if (n === 4) {
            $(this).css({'display': 'none', 'visibility': 'hidden'});
        }
    });

    // Event listener to change file name
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        var labels = document.getElementsByTagName('LABEL');

        for (var i = 0; i < labels.length; i++) {
            if (labels[i].htmlFor === e.target.id) {
                labels[i].innerHTML = fileName;
            }
        }
    });

    $("#accordion").bind("DOMSubtreeModified", function() {
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            var labels = document.getElementsByTagName('LABEL');
    
            for (var i = 0; i < labels.length; i++) {
                if (labels[i].htmlFor === e.target.id) {
                    labels[i].innerHTML = fileName;
                }
            }
        });
    });

    // Event listener for dropdown
    $('.dropdown-button').click(function() {
        $('.dropdown-menu').removeClass('open');
        
        $(this).find('.dropdown-menu').toggleClass('open');
    })

    // Event listener for dropdown hover
    $('.dropdown-button--hover').mouseover(function() {
        $('.dropdown-menu').removeClass('open');

        if (!$(this).find('.dropdown-menu').hasClass('open'))
            $(this).find('.dropdown-menu').addClass('open');
    })

    $('.dropdown-button--hover > .dropdown-menu').mouseout(function() {
        $(this).removeClass('open');
    })

    // Event listener to change the competition dropdown options based on category
    $("#select-cat").change(function() {

        var $category = document.getElementById('select-cat');
        var key = $category.value;
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

        var $competition = $("#select-comp");
        $competition.empty();
        $competition.append(`<option selected hidden value="default">Competition</option>`);

        $.each(vals, function(index, value) {
            $competition.append(`<option value="${value}">${value}</option>`);
        });
    });

    
    
    // Event listener for 'Next' button in Registration Page
    $('#nextStepButton').click(() => {
        if (!$('.register-detail-card').hasClass('show')) {
            $('.register-detail-card').addClass('show');
            $('.register__geometry--square').addClass('show');
            $('.register__geometry--circle').addClass('show');
        }
    })

    // Event listener to close hamburger menu when close button is clicked
    $('.close-button').click(function() {
        $('.header').removeClass('responsive');
    })

    // Event listener to open nested menu
    $('.nested-menu').click(function() {
        $(this).find('.menu').toggleClass('show');
        // $(this).toggleClass('show');
    })

    // In dashboard peserta, show the selected competition lists from selected category
    var $cat = $(".select-cat");
    var keyz = $cat[0].value;
    var vals1 = [];
                        
    switch(keyz) {
        case 'Arjuna':
            vals1 = json.Category[0].Arjuna;
            break;
        case 'Kresna':
            vals1 = json.Category[1].Kresna;
            break;
        case 'Prahasta':
            vals1 = json.Category[2].Prahasta;
            break;
        case 'Nakula':
            vals1 = json.Category[3].Nakula;
            break;
        case 'Sadewa':
            vals1 = json.Category[4].Sadewa;
            break;
    }

    var $comp = $(".select-comp");
    $comp.empty();

    $.each(vals1, function(index, value) {
        if(value == app.kategori) {
            $comp.append(`<option value="${value}" selected>${value}</option>`);
        } else {
            $comp.append(`<option value="${value}">${value}</option>`);
        }
    });
});

$(document).click(function(event){
    var $trigger = $(".dropdown");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".dropdown-menu").removeClass("open");
    }            

    var $trigger2 = $(".header.responsive");
    if($trigger2 !== event.target && !$trigger2.has(event.target).length){
        $(".header.responsive").removeClass("responsive");
    }   
});