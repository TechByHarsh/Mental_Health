<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $testName }} — A premium, confidential clinical screening tool coming soon to TheraWel.">
    <title>{{ $testName }} — Coming Soon — TheraWel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/gad7-assessment.css">
    <style>
        .coming-soon-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 48px;
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        .coming-soon-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.25rem;
            font-weight: 300;
            color: #ffffff;
            margin-bottom: 12px;
            letter-spacing: -0.01em;
        }
        .coming-soon-desc {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
            margin-bottom: 28px;
            font-weight: 300;
        }
        .back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #3d5c3f;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(61, 92, 63, 0.25);
        }
        .back-btn:hover {
            background: #243a26;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(36, 58, 38, 0.4);
        }
        .coming-soon-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #a8c5ab;
        }
        .badge {
            display: inline-block;
            background: rgba(168, 197, 171, 0.15);
            color: #a8c5ab;
            font-family: 'Inter', sans-serif;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 16px;
            border: 1px solid rgba(168, 197, 171, 0.25);
        }
    </style>
</head>
<body>

<div class="gad-page-wrapper">
    <!-- Fixed Background (loaded once, persistent, fixed in place) -->
    <div class="gad-fixed-bg">
        <img src="/images/gad-img1.png" alt="Serene forest lake background" loading="eager">
        <div class="gad-fixed-overlay" style="background: linear-gradient(135deg, rgba(30, 55, 32, 0.85) 0%, rgba(15, 30, 16, 0.92) 100%);"></div>
        <div class="gad-fixed-glow gad-fixed-glow--top"></div>
        <div class="gad-fixed-glow gad-fixed-glow--bottom"></div>
        <div class="gad-particles" id="gadParticles"></div>
    </div>

    <!-- Central Interactive Content Container -->
    <div class="gad-content-container" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        
        <div class="coming-soon-card">
            <div class="coming-soon-icon">
                @if($testIcon === 'burnout')
                    <!-- Burnout Icon: Recharge / Spark -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                    </svg>
                @elseif($testIcon === 'panic')
                    <!-- Panic Icon: Heart Rate Spike -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 10.5l1.5-3 1.5 6 1.5-4.5 1 1.5"></path>
                    </svg>
                @elseif($testIcon === 'emotional')
                    <!-- Emotional Icon: Lotus Bloom -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 12h18M12 12l6.364-6.364M12 12L5.636 5.636M12 12l6.364 6.364M12 12L5.636 18.364"></path>
                    </svg>
                @elseif($testIcon === 'selfesteem')
                    <!-- Self Esteem Icon: Shield / Crown -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                    </svg>
                @elseif($testIcon === 'relationship')
                    <!-- Relationship Icon: Hearts -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.649 3.17c.563-.186 1.15-.29 1.751-.31m0 0c.602-.019 1.202.05 1.78.21m-3.531.1c.563-.187 1.15-.29 1.751-.31m0 0c.602-.019 1.202.05 1.78.21M1.5 12h21M12 1.5v21"></path>
                    </svg>
                @else
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                    </svg>
                @endif
            </div>

            <span class="badge">CALIBRATING ALGORITHM</span>
            
            <h1 class="coming-soon-title">{{ $testName }}</h1>
            <p class="coming-soon-desc">
                Our clinical psychotherapists and software architects are currently calibrating the scoring models and diagnostic weights for the <strong>{{ $testName }}</strong>.
                <br><br>
                We believe in providing the most accurate, scientifically sound, and clinically-backed assessments. This test will be available very soon. Thank you for your patience on your journey to healing.
            </p>

            <a href="/dashboard#wellness-tests" class="back-btn">
                ← Back To Wellness Tests
            </a>
        </div>

        <!-- Persistent Static Footer -->
        <div class="gad-footer" id="gadPersistentFooter" style="position: relative; margin-top: 20px;">
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
    makeParticles('gadParticles',15);
})();
</script>

</body>
</html>
