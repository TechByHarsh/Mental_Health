@extends('layouts.app')
@section('title','Program Details – Therawell')
@section('head')
<style>
.prog-hero{padding:140px 64px 80px;position:relative;z-index:1;}
.prog-hero h1{color:#fff;margin-bottom:16px;}
.prog-hero p{max-width:540px;font-size:.95rem;}
.prog-meta-row{display:flex;gap:20px;flex-wrap:wrap;margin-top:20px;align-items:center;}
.prog-meta-pill{display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.09);
  border:1px solid rgba(255,255,255,.14);border-radius:50px;padding:7px 16px;font-size:.8rem;color:rgba(255,255,255,.8);}
.prog-meta-pill span{font-size:1rem;}
.detail-grid{display:grid;grid-template-columns:1.4fr 1fr;gap:48px;align-items:start;}
.benefit-item{display:flex;align-items:flex-start;gap:14px;padding:14px 0;border-bottom:1px solid rgba(255,255,255,.06);}
.benefit-item:last-child{border:none;}
.benefit-check{width:28px;height:28px;border-radius:50%;background:rgba(90,158,94,.2);border:1px solid rgba(90,158,94,.35);
  display:flex;align-items:center;justify-content:center;font-size:.75rem;color:#6dba72;flex-shrink:0;}
.benefit-item h4{font-family:'Inter',sans-serif;font-size:.87rem;font-weight:500;color:#fff;margin-bottom:3px;}
.benefit-item p{font-size:.8rem;margin:0;}
.booking-card{padding:36px;position:sticky;top:96px;}
.price-display{font-family:'Cormorant Garamond',serif;font-size:2.6rem;color:#fff;margin-bottom:4px;}
.price-display small{font-family:'Inter',sans-serif;font-size:.82rem;color:rgba(255,255,255,.45);}
.inc-item{display:flex;align-items:center;gap:10px;padding:10px 0;border-bottom:1px solid rgba(255,255,255,.06);font-size:.83rem;color:rgba(255,255,255,.75);}
.inc-item:last-child{border:none;}
.inc-item::before{content:'✓';color:#6dba72;font-weight:600;}
.therapist-card{padding:28px;margin-top:28px;}
.therapist-row{display:flex;gap:16px;align-items:center;}
.therapist-avatar{width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,rgba(74,117,80,.7),rgba(45,90,50,.9));
  border:2px solid rgba(168,197,171,.3);display:flex;align-items:center;justify-content:center;
  font-family:'Cormorant Garamond',serif;font-size:1.5rem;color:rgba(255,255,255,.75);flex-shrink:0;}
.therapist-name{color:#fff;font-size:1rem;margin-bottom:3px;}
.therapist-cred{font-size:.76rem;color:var(--sage-light);}
.schedule-row{display:flex;justify-content:space-between;align-items:center;
  padding:12px 0;border-bottom:1px solid rgba(255,255,255,.06);font-size:.83rem;}
.schedule-row:last-child{border:none;}
.schedule-row .day{color:rgba(255,255,255,.65);}
.schedule-row .time{color:#fff;}
.schedule-row .slots{font-size:.73rem;color:var(--sage-light);}
.rating-row{display:flex;align-items:center;gap:10px;margin:14px 0;}
.stars{color:#d4af6a;font-size:1rem;letter-spacing:2px;}
.review-count{font-size:.78rem;color:rgba(255,255,255,.45);}
</style>
@endsection

@section('content')
@php
$programs=[
  'anxiety-relief'=>['Anxiety Relief','Anxiety & Phobia','8 weeks','₹3,200','🌬️',
    'A structured 8-week program using evidence-based Cognitive Behavioural Therapy (CBT) combined with breathing exercises and somatic awareness to address anxiety at its root cause.',
    ['CBT-based weekly therapy sessions','Personalised breathing protocols','Somatic grounding exercises','Progress tracking dashboard','24/7 crisis support line','Guided journaling prompts'],
    ['Reduce anxious thoughts and worry','Build confidence in social situations','Develop long-term coping skills','Improve physical symptoms of anxiety'],
    'Dr. Priya Mehra','Clinical Psychologist, 10 yrs experience'],
  'depression-support'=>['Depression Support','Mood Disorder','12 weeks','₹4,500','🌙',
    'A comprehensive 12-week program combining talk therapy, behavioural activation and mindfulness practice, designed for lasting mood improvement and emotional resilience.',
    ['Weekly 1:1 therapy sessions','Mood tracking and analytics','Behavioural activation plans','Mindfulness audio library','Group peer support sessions','Monthly psychiatrist review'],
    ['Lift persistent low mood','Rebuild motivation and energy','Reconnect with life enjoyment','Develop lasting emotional resilience'],
    'Dr. Sara Kaur','Psychiatrist & Therapist, 8 yrs experience'],
];
$slug=$slug??'anxiety-relief';
$p=$programs[$slug]??$programs['anxiety-relief'];
@endphp

<div class="page-bg">
  <div class="prog-hero rel">
    <span class="hero-badge">{{ $p[1] }}</span>
    <h1>{{ $p[0] }}</h1>
    <p>{{ $p[5] }}</p>
    <div class="prog-meta-row">
      <div class="prog-meta-pill"><span>⏱</span>{{ $p[2] }}</div>
      <div class="prog-meta-pill"><span>💰</span>From {{ $p[3] }}/month</div>
      <div class="prog-meta-pill"><span>👤</span>1-on-1 Sessions</div>
      <div class="prog-meta-pill"><span>🌐</span>Online & In-person</div>
    </div>
  </div>
</div>

<section class="section" style="background:#0d1f13;">
  <div class="detail-grid">
    <!-- Left: Details -->
    <div>
      <!-- What's included -->
      <div class="glass-card" style="padding:32px;margin-bottom:24px;" data-fade>
        <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--sage-light);margin-bottom:20px;">What's Included</div>
        @foreach($p[6] as $inc)
        <div class="inc-item">{{ $inc }}</div>
        @endforeach
      </div>

      <!-- Benefits -->
      <div class="glass-card" style="padding:32px;margin-bottom:24px;" data-fade>
        <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--sage-light);margin-bottom:20px;">Expected Outcomes</div>
        @foreach($p[7] as $i=>$b)
        <div class="benefit-item">
          <div class="benefit-check">✓</div>
          <div>
            <h4>{{ $b }}</h4>
            <p>Evidence-based outcomes observed in 85% of participants who completed the full program.</p>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Schedule -->
      <div class="glass-card" style="padding:32px;" data-fade>
        <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--sage-light);margin-bottom:20px;">Available Session Times</div>
        @foreach([['Monday','9:00 AM – 12:00 PM','3 slots'],['Wednesday','2:00 PM – 6:00 PM','4 slots'],['Friday','10:00 AM – 1:00 PM','2 slots'],['Saturday','9:00 AM – 3:00 PM','5 slots']] as $s)
        <div class="schedule-row">
          <span class="day">{{ $s[0] }}</span>
          <span class="time">{{ $s[1] }}</span>
          <span class="slots">{{ $s[2] }} available</span>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Right: Booking card -->
    <div>
      <div class="glass-card booking-card" data-fade>
        <div class="price-display">{{ $p[3] }} <small>/month</small></div>
        <div class="rating-row">
          <span class="stars">★★★★★</span>
          <span class="review-count">4.9 · 142 reviews</span>
        </div>
        <p style="font-size:.82rem;margin-bottom:24px;">Cancel anytime. First session is free with all programs.</p>
        <a href="/assessment/phq9" class="btn-cta" style="width:100%;justify-content:center;margin-bottom:12px;">Book This Program</a>
        <a href="/assessment/phq9" class="btn-secondary" style="width:100%;justify-content:center;">Take Assessment First</a>
        <hr class="divider" style="margin:20px 0;">
        <div style="font-size:.78rem;color:rgba(255,255,255,.45);text-align:center;line-height:1.6;">
          🔒 Secure & confidential · Cancel anytime<br>
          💳 EMI available on all plans
        </div>
      </div>

      <!-- Therapist -->
      <div class="glass-card therapist-card" data-fade>
        <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--sage-light);margin-bottom:16px;">Your Therapist</div>
        <div class="therapist-row">
          <div class="therapist-avatar">{{ substr($p[8],3,1) }}</div>
          <div>
            <div class="therapist-name">{{ $p[8] }}</div>
            <div class="therapist-cred">{{ $p[9] }}</div>
          </div>
        </div>
        <p style="font-size:.81rem;margin-top:14px;">Specialising in evidence-based therapy with a warm, non-judgmental approach tailored to each individual client.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA band -->
<section class="section" style="background:rgba(8,20,12,.8);padding-top:0;">
  <div style="background:linear-gradient(135deg,rgba(45,90,50,.4),rgba(61,122,68,.25));border:1px solid rgba(90,158,94,.22);border-radius:22px;padding:56px;text-align:center;" data-fade>
    <span class="hero-badge" style="margin-bottom:16px;display:inline-block;">Start Today</span>
    <h2 style="color:#fff;margin-bottom:14px;">Begin Your Healing Journey</h2>
    <p style="max-width:400px;margin:0 auto 28px;">The best time to start was yesterday. The second best time is now.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="/assessment/phq9" class="btn-cta">Book {{ $p[0] }}</a>
      <a href="/services" class="btn-secondary">Explore Other Programs</a>
    </div>
  </div>
</section>
@endsection
