<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sleep Quality Assessment — A peaceful, confidential clinical screening tool to help you measure and support your sleep patterns.">
    <title>Sleep Quality Assessment  – Therawell</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Link to unified design system stylesheet -->
    <link rel="stylesheet" href="/css/gad7-assessment.css">
</head>
<body>

<div class="gad-page-wrapper">
    <!-- Fixed Background (loaded once, persistent, fixed in place) -->
    <div class="gad-fixed-bg">
        <img src="/images/gad-img1.png" alt="Serene forest lake background" loading="eager">
        <div class="gad-fixed-overlay"></div>
        <div class="gad-fixed-glow gad-fixed-glow--top"></div>
        <div class="gad-fixed-glow gad-fixed-glow--bottom"></div>
        <div class="gad-particles" id="gadParticles"></div>
        
        <!-- Ambient Birds -->
        <div class="gad-bird" id="bird1" style="top: 12%; left: 5%; animation-duration: 18s; animation-delay: 0s;">
            <svg viewBox="0 0 28 16"><path d="M2 14C5 6 9 4 14 8C19 4 23 6 26 14"/></svg>
        </div>
        <div class="gad-bird" id="bird2" style="top: 8%; left: 20%; animation-duration: 22s; animation-delay: 3s; opacity: 0.15;">
            <svg viewBox="0 0 28 16"><path d="M2 14C5 6 9 4 14 8C19 4 23 6 26 14"/></svg>
        </div>
        <div class="gad-bird" id="bird3" style="top: 18%; left: -5%; animation-duration: 25s; animation-delay: 7s; opacity: 0.12;">
            <svg viewBox="0 0 28 16"><path d="M2 14C5 6 9 4 14 8C19 4 23 6 26 14"/></svg>
        </div>
    </div>

    <!-- Central Interactive Content Container -->
    <div class="gad-content-container">
        
        <!-- Persistent Fixed Title Header Area (Never Moves, Never Collapses) -->
        <div class="gad-header-section" id="gadHeaderSection">
            <!-- Lotus Icon -->
            <div class="gad-lotus">
                <svg viewBox="0 0 64 64">
                    <path d="M32 8C32 8 24 20 24 32C24 40 28 46 32 48C36 46 40 40 40 32C40 20 32 8 32 8Z" />
                    <path d="M32 48C28 44 16 38 10 32C6 28 6 22 10 18C14 22 22 30 32 48Z" />
                    <path d="M32 48C36 44 48 38 54 32C58 28 58 22 54 18C50 22 42 30 32 48Z" />
                    <path d="M10 18C6 14 2 18 4 24C6 28 10 32 10 32" opacity="0.5" />
                    <path d="M54 18C58 14 62 18 60 24C58 28 54 32 54 32" opacity="0.5" />
                    <path d="M18 52C22 48 27 46 32 48C37 46 42 48 46 52" opacity="0.4" />
                </svg>
            </div>

            <!-- Heading -->
            <h1 class="gad-heading">Sleep Quality Assessment</h1>

            <!-- Decorative Divider -->
            <div class="gad-divider">
                <span class="gad-divider__line"></span>
                <span class="gad-divider__dot"></span>
                <span class="gad-divider__line"></span>
            </div>

            <!-- Subtitle -->
            <p class="gad-subtitle">A peaceful, gentle space to understand, reflect on, and support your sleep health.</p>
        </div>

        <!-- ── Permanent Fixed Outer Card ── -->
        <div class="gad-outer-card" id="gadOuterCard">
            <!-- Content Viewport -->
            <div class="gad-card-viewport" id="gadCardViewport">
                
                <!-- PANE 1: DISCLAIMER INNER CONTENT -->
                <div class="gad-card-pane active" id="pane-disclaimer">
                    <!-- Row 1 — Important Information -->
                    <div class="gad-info-row">
                        <div class="gad-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <polyline points="9 12 11 14 15 10"/>
                            </svg>
                        </div>
                        <div class="gad-info-text">
                            <div class="gad-info-title">Sleep Pattern Screening</div>
                            <div class="gad-info-desc">This screening helps track indicators of sleep hygiene, sleep disruption, restfulness, and fatigue. It is completely supportive and confidential.</div>
                        </div>
                    </div>

                    <div class="gad-row-divider"></div>

                    <!-- Row 2 — Privacy -->
                    <div class="gad-info-row">
                        <div class="gad-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0110 0v4"/>
                                <circle cx="12" cy="16" r="1"/>
                            </svg>
                        </div>
                        <div class="gad-info-text">
                            <div class="gad-info-title">Secure & Confidential</div>
                            <div class="gad-info-desc">Your results are protected using modern web encryption and are visible only to you. We hold your personal details in highest trust.</div>
                        </div>
                    </div>

                    <div class="gad-row-divider"></div>

                    <!-- Row 3 — Immediate Support -->
                    <div class="gad-info-row">
                        <div class="gad-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
                            </svg>
                        </div>
                        <div class="gad-info-text">
                            <div class="gad-info-title">Need Help Offline?</div>
                            <div class="gad-info-desc">If chronic insomnia, distress, or exhausting fatigue are affecting your daily physical and mental safety, please reach out to your local clinical healthcare team.</div>
                        </div>
                    </div>

                    <!-- Cream CTA Button inside the card -->
                    <div class="gad-cta-wrapper">
                        <button type="button" class="gad-cta-btn" id="gadBeginBtn" onclick="startAssessmentFlow()">
                            I Understand, Begin Assessment
                            <span class="gad-cta-arrow">
                                <svg viewBox="0 0 24 24">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="13 6 19 12 13 18"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- PANE 2: ASSESSMENT INNER CONTENT -->
                <div class="gad-card-pane inactive" id="pane-assessment">
                    <!-- Top Area -->
                    <div class="gad-pane-header">
                        <span class="gad-step-label" id="gadStepLabel">STEP 1 OF 10</span>
                        <button class="gad-back-btn" id="gadBackBtn" style="visibility: hidden" onclick="prevQuestionFlow()">
                            <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg> Previous
                        </button>
                    </div>
                    
                    <!-- Animated progress bar -->
                    <div class="gad-progress">
                        <div class="gad-progress__track">
                            <div class="gad-progress__fill" id="gadProgressFill"></div>
                        </div>
                    </div>

                    <!-- Double-buffered question slider viewport -->
                    <div class="gad-question-viewport" id="gadQuestionViewport">
                        <!-- Slide A -->
                        <div class="gad-question-slide active" id="gad-slide-A">
                            <div class="gad-question-area">
                                <p class="gad-question-text"></p>
                            </div>
                            <div class="gad-options"></div>
                        </div>

                        <!-- Slide B -->
                        <div class="gad-question-slide inactive" id="gad-slide-B">
                            <div class="gad-question-area">
                                <p class="gad-question-text"></p>
                            </div>
                            <div class="gad-options"></div>
                        </div>
                    </div>

                    <!-- Subtle privacy note at bottom of card -->
                    <div class="gad-pane-footer">
                        <p class="gad-pane-footer-text">🔒 Your responses are completely private and secure.</p>
                    </div>
                </div>

                <!-- PANE 3: COMPLETION INNER CONTENT -->
                <div class="gad-card-pane inactive" id="pane-complete">
                    <div class="gad-complete-content">
                        <div class="gad-complete-icon">
                            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <h2 class="gad-complete-title">Assessment Completed</h2>
                        <p class="gad-complete-subtitle">Thank you for your honesty and courage.</p>
                        
                        <div class="gad-complete-summary">
                            <div class="gad-summary-item">
                                <span>Questions Answered</span>
                                <strong id="gadSummaryCount">10 of 10</strong>
                            </div>
                            <div class="gad-summary-item">
                                <span>Assessment</span>
                                <strong>Sleep Quality Screening</strong>
                            </div>
                            <p class="gad-complete-note">
                                Your answers will be analyzed to assess your recent sleep quality index. May you find restful nights and peaceful mornings ahead.
                            </p>
                        </div>

                        <!-- Form submission -->
                        <form id="gadSubmitForm" action="/assessment/sleep/submit" method="POST" style="width:100%;">
                            @csrf
                            <div id="gadHiddenInputs"></div>
                            <button type="submit" class="gad-submit-results-btn">
                                View My Results 
                                <svg viewBox="0 0 24 24">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="13 6 19 12 13 18"/>
                                </svg>
                            </button>
                        </form>
                        <button class="gad-complete-retake" onclick="retakeAssessmentFlow()">↻ Retake Assessment</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Persistent Static Footer -->
        <div class="gad-footer" id="gadPersistentFooter">
            <span class="gad-footer__lotus">
                <svg viewBox="0 0 64 64">
                    <path d="M32 8C32 8 24 20 24 32C24 40 28 46 32 48C36 46 40 40 40 32C40 20 32 8 32 8Z" />
                    <path d="M32 48C28 44 16 38 10 32C6 28 6 22 10 18C14 22 22 30 32 48Z" />
                    <path d="M32 48C36 44 48 38 54 32C58 28 58 22 54 18C50 22 42 30 32 48Z" />
                    <path d="M18 52C22 48 27 46 32 48C37 46 42 48 46 52" opacity="0.4" />
                </svg>
            </span>
            <span class="gad-footer__text">You are not alone. Help is always available.</span>
        </div>

    </div>
</div>

<!-- ═══════════════════════════════════════
     SCRIPTS
     ═══════════════════════════════════════ -->
<script>
(function(){
    // Soft floating particles
    function makeParticles(id, count){
        var c = document.getElementById(id); if(!c) return;
        for(var i=0;i<count;i++){
            var p=document.createElement('div'); p.className='gad-particle';
            var s=Math.random()*4+1.5;
            p.style.cssText='width:'+s+'px;height:'+s+'px;left:'+Math.random()*100+'%;animation-duration:'+(Math.random()*18+12)+'s;animation-delay:'+(Math.random()*15)+'s;opacity:'+(Math.random()*0.15+0.05);
            c.appendChild(p);
        }
    }
    makeParticles('gadParticles',28);
})();

// Sleep questions mapping
var SLEEP_QUESTIONS = [
    @foreach($questions as $q)
    { id: {{ $q->id }}, text: @json($q->question_text) },
    @endforeach
];

var SLEEP_OPTIONS = [
    { value: 0, label: 'Never' },
    { value: 1, label: 'Almost Never' },
    { value: 2, label: 'Sometimes' },
    { value: 3, label: 'Fairly Often' }
];

var currentIdx = 0;
var answers = {};
var isTransitioning = false;

/**
 * 1. Start Assessment Transition: Disclaimer -> Question 1
 * Outer card stays completely fixed, only inner contents slide horizontally with height adjustments.
 */
function startAssessmentFlow(){
    if (isTransitioning) return;
    isTransitioning = true;
    
    var card = document.getElementById('gadOuterCard');
    var paneDisclaimer = document.getElementById('pane-disclaimer');
    var paneAssessment = document.getElementById('pane-assessment');
    
    // Lock start height of our fixed glass container
    var initialH = card.offsetHeight;
    card.style.height = initialH + 'px';
    
    // Pre-populate question 1 on slide A
    renderQuestionInSlide('gad-slide-A', 0);
    
    // Position incoming assessment pane offscreen left
    paneAssessment.classList.remove('inactive');
    paneAssessment.classList.add('enter-start-left');
    
    // Force browser paint flow
    paneAssessment.offsetHeight;
    
    // Calculate exact target height mathematically to avoid transition interference
    var paddingH = initialH - paneDisclaimer.offsetHeight;
    var targetH = paddingH + paneAssessment.scrollHeight;
    
    // Trigger animations simultaneously
    card.style.height = targetH + 'px';
    
    paneDisclaimer.classList.add('exit-right');
    paneDisclaimer.classList.remove('active');
    
    paneAssessment.classList.remove('enter-start-left', 'inactive');
    paneAssessment.classList.add('enter-active-left', 'active');
    
    setTimeout(function(){
        paneDisclaimer.classList.add('inactive');
        paneDisclaimer.classList.remove('exit-right');
        paneAssessment.classList.remove('enter-active-left');
        
        // Unlock card height back to auto for responsive text wrapping
        card.style.height = 'auto';
        isTransitioning = false;
    }, 800);
}

/**
 * Populates question text, horizontal steps, dynamic progress track, and option grid inside a target slide.
 */
function renderQuestionInSlide(slideId, idx) {
    var slide = document.getElementById(slideId);
    var q = SLEEP_QUESTIONS[idx];
    var total = SLEEP_QUESTIONS.length;
    
    // Update labels and progress bar
    document.getElementById('gadStepLabel').textContent = 'STEP ' + (idx + 1) + ' OF ' + total;
    var pct = ((idx) / total) * 100;
    document.getElementById('gadProgressFill').style.width = pct + '%';
    
    // Previous button rules (safely hidden on question 1)
    var backBtn = document.getElementById('gadBackBtn');
    if (idx > 0) {
        backBtn.style.visibility = 'visible';
        backBtn.style.pointerEvents = 'auto';
    } else {
        backBtn.style.visibility = 'hidden';
        backBtn.style.pointerEvents = 'none';
    }
    
    // Load typography
    slide.querySelector('.gad-question-text').textContent = q.text;
    
    // Clean and build option cards grid
    var optionsContainer = slide.querySelector('.gad-options');
    optionsContainer.innerHTML = '';
    
    SLEEP_OPTIONS.forEach(function(opt) {
        var card = document.createElement('div');
        card.className = 'gad-option' + (answers[q.id] === opt.value ? ' selected' : '');
        card.setAttribute('data-value', opt.value);
        card.innerHTML = `
            <span class="gad-option__value">${opt.value}</span>
            <span class="gad-option__label">${opt.label}</span>
            <span class="gad-option__radio"></span>
        `;
        card.onclick = function() { selectAnswerFlow(q.id, opt.value); };
        optionsContainer.appendChild(card);
    });
}

/**
 * Highlights choice card, locks layout, waits 500ms, and advances questions.
 */
function selectAnswerFlow(qId, val){
    if (isTransitioning) return;
    
    answers[qId] = val;
    
    // Fast visual feedback on clicked option
    var activeSlide = document.querySelector('.gad-question-slide.active');
    var opts = activeSlide.querySelectorAll('.gad-option');
    opts.forEach(function(o){
        var value = parseInt(o.getAttribute('data-value'), 10);
        o.classList.toggle('selected', value === val);
    });
    
    isTransitioning = true;
    
    setTimeout(function(){
        isTransitioning = false; // release lock for slide function
        if(currentIdx < SLEEP_QUESTIONS.length - 1){
            currentIdx++;
            transitionQuestion(currentIdx, 'next');
        } else {
            showCompleteFlow();
        }
    }, 500);
}

/**
 * 2. Question Transitions: Double-buffered horizontal slider swaps inside card only.
 */
function transitionQuestion(nextIdx, direction){
    if (isTransitioning) return;
    isTransitioning = true;
    
    var card = document.getElementById('gadOuterCard');
    var currentSlide = document.querySelector('.gad-question-slide.active');
    var inactiveSlide = document.querySelector('.gad-question-slide.inactive');
    
    // Lock current height of the outer card to transition smoothly
    var initialH = card.offsetHeight;
    card.style.height = initialH + 'px';
    
    // Render the next question details inside the inactive slide
    renderQuestionInSlide(inactiveSlide.id, nextIdx);
    
    // Prep transform parameters on the incoming slide
    inactiveSlide.style.transition = 'none';
    if (direction === 'next') {
        inactiveSlide.style.transform = 'translateX(100%)';
    } else {
        inactiveSlide.style.transform = 'translateX(-100%)';
    }
    inactiveSlide.style.opacity = '0';
    
    // Force paint flow
    inactiveSlide.offsetHeight;
    
    // Calculate exact target height mathematically to prevent transition conflicts
    var targetH = initialH - currentSlide.offsetHeight + inactiveSlide.scrollHeight;
    
    // Trigger card height transition
    card.style.height = targetH + 'px';
    
    // Animate horizontal translation slide swaps
    setTimeout(function(){
        inactiveSlide.style.transition = '';
        currentSlide.style.transition = '';
        
        if (direction === 'next') {
            currentSlide.style.transform = 'translateX(-100%)';
            currentSlide.style.opacity = '0';
            inactiveSlide.style.transform = 'translateX(0)';
            inactiveSlide.style.opacity = '1';
        } else {
            currentSlide.style.transform = 'translateX(100%)';
            currentSlide.style.opacity = '0';
            inactiveSlide.style.transform = 'translateX(0)';
            inactiveSlide.style.opacity = '1';
        }
        
        setTimeout(function(){
            // Lock target layout classes
            currentSlide.classList.remove('active');
            currentSlide.classList.add('inactive');
            currentSlide.style.transform = '';
            currentSlide.style.opacity = '';
            
            inactiveSlide.classList.remove('inactive');
            inactiveSlide.classList.add('active');
            inactiveSlide.style.transform = '';
            inactiveSlide.style.opacity = '';
            
            // Release card height restrictions
            card.style.height = 'auto';
            isTransitioning = false;
        }, 550);
    }, 30);
}

/**
 * Slides back to previous question deck.
 */
function prevQuestionFlow(){
    if (isTransitioning) return;
    if (currentIdx > 0) {
        currentIdx--;
        transitionQuestion(currentIdx, 'prev');
    }
}

/**
 * 3. Complete Transition: Assessment -> Completion Screen (Within same outer card)
 */
function showCompleteFlow(){
    if (isTransitioning) return;
    isTransitioning = true;
    
    var card = document.getElementById('gadOuterCard');
    var paneAssessment = document.getElementById('pane-assessment');
    var paneComplete = document.getElementById('pane-complete');
    
    // Force progress bar fill to 100%
    document.getElementById('gadProgressFill').style.width = '100%';
    
    // Lock starting height
    var initialH = card.offsetHeight;
    card.style.height = initialH + 'px';
    
    // Prep incoming complete pane offscreen right
    paneComplete.classList.remove('inactive');
    paneComplete.classList.add('enter-start-right');
    
    // Force reflow
    paneComplete.offsetHeight;
    
    // Calculate target height mathematically to prevent transition conflicts
    var paddingH = initialH - paneAssessment.offsetHeight;
    var targetH = paddingH + paneComplete.scrollHeight;
    
    // Trigger animations
    card.style.height = targetH + 'px';
    
    paneAssessment.classList.add('exit-left');
    paneAssessment.classList.remove('active');
    
    paneComplete.classList.remove('enter-start-right', 'inactive');
    paneComplete.classList.add('enter-active-right', 'active');
    
    // Populate form payload
    var total = SLEEP_QUESTIONS.length;
    document.getElementById('gadSummaryCount').textContent = total + ' of ' + total;
    var hid = document.getElementById('gadHiddenInputs');
    hid.innerHTML = '';
    for (var qId in answers) {
        var inp = document.createElement('input');
        inp.type = 'hidden';
        inp.name = 'answers[' + qId + ']';
        inp.value = answers[qId];
        hid.appendChild(inp);
    }
    
    setTimeout(function(){
        paneAssessment.classList.add('inactive');
        paneAssessment.classList.remove('exit-left');
        paneComplete.classList.remove('enter-active-right');
        
        card.style.height = 'auto';
        isTransitioning = false;
    }, 800);
}

/**
 * 4. Retake Transition: Complete -> Assessment
 */
function retakeAssessmentFlow(){
    if (isTransitioning) return;
    isTransitioning = true;
    
    currentIdx = 0;
    answers = {};
    
    var card = document.getElementById('gadOuterCard');
    var paneComplete = document.getElementById('pane-complete');
    var paneAssessment = document.getElementById('pane-assessment');
    
    // Lock start height
    var initialH = card.offsetHeight;
    card.style.height = initialH + 'px';
    
    // Prep assessment pane offscreen left
    paneAssessment.classList.remove('inactive');
    paneAssessment.classList.add('enter-start-left');
    
    // Reset question slides
    var slideA = document.getElementById('gad-slide-A');
    var slideB = document.getElementById('gad-slide-B');
    slideA.className = 'gad-question-slide active';
    slideB.className = 'gad-question-slide inactive';
    slideA.style.transform = '';
    slideA.style.opacity = '';
    slideB.style.transform = '';
    slideB.style.opacity = '';
    
    renderQuestionInSlide('gad-slide-A', 0);
    
    // Force reflow
    paneAssessment.offsetHeight;
    
    // Calculate natural target height mathematically to prevent transition conflicts
    var paddingH = initialH - paneComplete.offsetHeight;
    var targetH = paddingH + paneAssessment.scrollHeight;
    
    // Run slide animations
    card.style.height = targetH + 'px';
    
    paneComplete.classList.add('exit-right');
    paneComplete.classList.remove('active');
    
    paneAssessment.classList.remove('enter-start-left', 'inactive');
    paneAssessment.classList.add('enter-active-left', 'active');
    
    setTimeout(function(){
        paneComplete.classList.add('inactive');
        paneComplete.classList.remove('exit-right');
        paneAssessment.classList.remove('enter-active-left');
        
        card.style.height = 'auto';
        isTransitioning = false;
    }, 800);
}
</script>

</body>
</html>
