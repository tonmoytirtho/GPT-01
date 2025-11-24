<?php
// Demo data for hero, products, and testimonials
$zenClassics = [
    [
        'title' => 'Slate Cuban Shirt',
        'category' => 'Zen Classics',
        'price' => 1890,
        'discount' => '10% OFF',
        'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Contrast Line Jacket',
        'category' => 'Outerwear',
        'price' => 2490,
        'discount' => '15% OFF',
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Relaxed Denim Shirt',
        'category' => 'Denim',
        'price' => 2190,
        'discount' => '₹100 OFF',
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Muted Check Shacket',
        'category' => 'Outerwear',
        'price' => 2790,
        'discount' => '₹120 OFF',
        'image' => 'https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?auto=format&fit=crop&w=800&q=80'
    ]
];

$styleGrid = [
    [
        'title' => 'Urban Night Layer',
        'price' => 1990,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Beachside Linen',
        'price' => 1690,
        'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Boardroom Ready',
        'price' => 2590,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=900&q=80'
    ],
    [
        'title' => 'Vintage Edge',
        'price' => 2090,
        'image' => 'https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?auto=format&fit=crop&w=900&q=80'
    ]
];

$trending = [
    [
        'title' => 'Color Block Polo',
        'price' => 1890,
        'image' => 'https://images.unsplash.com/photo-1495107334309-fcf20504a5ab?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Minimal Zip Jacket',
        'price' => 2690,
        'image' => 'https://images.unsplash.com/photo-1495107334309-fcf20504a5ab?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Contrast Trim Shirt',
        'price' => 1990,
        'image' => 'https://images.unsplash.com/photo-1495107334309-fcf20504a5ab?auto=format&fit=crop&w=700&q=80'
    ]
];

$moods = [
    [
        'title' => 'BLOOM CUBAN SHIRT',
        'description' => 'Soft florals and breathable cotton for laid-back days with a polished finish.',
        'cta' => 'DISCOVER MORE',
        'image' => 'https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=1400&q=80'
    ],
    [
        'title' => 'FORMAL BOLD LOOKS',
        'description' => 'Structured silhouettes and statement stripes that move seamlessly from boardroom to dinner.',
        'cta' => 'SHOP FORMALS',
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=1400&q=80'
    ],
    [
        'title' => 'VINTAGE NOSTALGICS',
        'description' => 'Muted tones, heritage patterns, and timeless fits inspired by retro archives.',
        'cta' => 'BROWSE PRODUCTS',
        'image' => 'https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?auto=format&fit=crop&w=1400&q=80'
    ],
];

$reviews = [
    [
        'name' => 'Afsana R.',
        'text' => 'Quality is top notch and the fit is exactly what I was looking for.',
        'rating' => 5
    ],
    [
        'name' => 'Tahmid A.',
        'text' => 'Loved the textures and the bold contrasts. Delivery was quick!',
        'rating' => 4
    ],
    [
        'name' => 'Samira H.',
        'text' => 'Customer support guided me to the perfect size. Highly recommend.',
        'rating' => 5
    ]
];

function formatBDT(int $amount): string {
    return 'BDT ' . number_format($amount, 0, '.', ',');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZEN Attire | Style meets Contrast</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f5f5f5;
            --card: #ffffff;
            --text: #333333;
            --muted: #6c6c6c;
            --accent: #e27d2d;
            --accent-2: #111111;
            --border: #e3e3e3;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; display: block; }
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255,255,255,0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 8px 18px rgba(0,0,0,0.05);
        }
        .nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 14px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            color: #111;
        }
        .logo {
            font-weight: 700;
            letter-spacing: 3px;
            font-size: 22px;
        }
        .menu {
            display: flex;
            align-items: center;
            gap: 18px;
            font-weight: 500;
            color: #111;
        }
        .menu-item {
            position: relative;
            padding: 6px 10px;
            border-radius: 8px;
            transition: color .2s, background .2s;
        }
        .menu-item:hover { color: #000; background: rgba(0,0,0,0.05); }
        .dropdown {
            position: absolute;
            top: 110%;
            left: 0;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            min-width: 180px;
            padding: 12px;
            box-shadow: 0 16px 36px rgba(0,0,0,0.08);
            opacity: 0;
            pointer-events: none;
            transform: translateY(10px);
            transition: all .2s ease;
        }
        .menu-item:hover .dropdown { opacity: 1; pointer-events: auto; transform: translateY(0); }
        .dropdown a { display: block; padding: 8px 10px; border-radius: 8px; color: var(--muted); }
        .dropdown a:hover { background: rgba(0,0,0,0.04); color: #111; }
        .icons { display: flex; align-items: center; gap: 12px; color: #111; }
        .icon-btn { width: 38px; height: 38px; display: grid; place-items: center; border-radius: 50%; border: 1px solid var(--border); background: #fafafa; transition: border .2s, transform .2s; color: #111; }
        .icon-btn:hover { border-color: #c7c7c7; transform: translateY(-2px); }
        .badge { font-size: 12px; color: #111; }

        .hero {
            position: relative;
            height: 74vh;
            display: grid;
            place-items: center;
            text-align: center;
            padding: 20px;
            overflow: hidden;
            background: #f0f0f0;
        }
        .hero img {
            position: absolute;
            inset: 0;
            width: 100%; height: 100%; object-fit: cover;
            filter: brightness(0.95);
        }
        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(245,245,245,0.4) 0%, rgba(245,245,245,0.9) 100%);
        }
        .hero-content { position: relative; max-width: 760px; z-index: 1; }
        .eyebrow { letter-spacing: 6px; font-size: 12px; color: var(--muted); }
        .hero h1 { font-size: clamp(32px, 6vw, 56px); margin: 12px 0 10px; color: #111; }
        .hero p { color: var(--muted); margin-bottom: 14px; }
        .tag { display: inline-block; padding: 10px 18px; border: 1px solid #111; border-radius: 999px; color: #111; font-weight: 600; background: rgba(255,255,255,0.6); }

        section { padding: 70px 22px; }
        .section-heading { max-width: 1200px; margin: 0 auto 24px; display: flex; align-items: center; justify-content: space-between; gap: 14px; }
        .section-heading h2 { margin: 0; font-size: 26px; letter-spacing: 1px; color: #111; }
        .pill { padding: 10px 14px; border-radius: 12px; border: 1px solid var(--border); color: var(--muted); font-size: 14px; background: #fff; }

        .carousel { position: relative; max-width: 1200px; margin: 0 auto; overflow: hidden; }
        .carousel-track { display: grid; grid-auto-flow: column; grid-auto-columns: minmax(240px, 1fr); gap: 18px; transition: transform .35s ease; }
        .card { background: var(--card); border: 1px solid var(--border); border-radius: 18px; overflow: hidden; position: relative; display: flex; flex-direction: column; min-height: 340px; box-shadow: 0 18px 40px rgba(0,0,0,0.06); }
        .discount { position: absolute; top: 12px; left: 12px; background: var(--accent-2); color: #fff; padding: 8px 12px; border-radius: 12px; font-weight: 700; font-size: 12px; letter-spacing: 0.5px; }
        .card-body { padding: 16px; display: flex; flex-direction: column; gap: 6px; flex: 1; }
        .card-title { font-weight: 600; font-size: 18px; margin: 0; color: #111; }
        .card-cat { color: var(--muted); font-size: 13px; letter-spacing: 0.5px; }
        .price { font-weight: 600; color: #111; }

        .carousel-controls { position: absolute; inset: 0; display: flex; justify-content: space-between; align-items: center; pointer-events: none; }
        .control-btn { width: 40px; height: 40px; background: #fff; border: 1px solid var(--border); border-radius: 50%; color: #111; display: grid; place-items: center; cursor: pointer; pointer-events: auto; transition: transform .2s, border .2s, box-shadow .2s; box-shadow: 0 10px 20px rgba(0,0,0,0.06); }
        .control-btn:hover { transform: scale(1.05); border-color: #c7c7c7; }

        .mood-section { max-width: 1200px; margin: 0 auto 32px; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px; align-items: center; background: #fff; border-radius: 18px; overflow: hidden; box-shadow: 0 18px 40px rgba(0,0,0,0.06); padding: 0; }
        .mood-section img { width: 100%; height: 100%; object-fit: cover; }
        .mood-content { padding: 28px; display: grid; gap: 12px; }
        .mood-title { margin: 0; font-size: 24px; letter-spacing: 1px; color: #111; }
        .mood-text { color: var(--muted); margin: 0; }
        .ghost-btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 18px; border-radius: 12px; border: 1px solid #111; color: #111; font-weight: 600; width: fit-content; }
        .mood-section.reverse .mood-content { order: 2; }
        .mood-section.reverse .mood-image { order: 1; }

        .grid-products { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 18px; }

        .reviews { max-width: 960px; margin: 0 auto; text-align: center; }
        .review-card { background: var(--card); border: 1px solid var(--border); border-radius: 16px; padding: 22px; min-height: 180px; box-shadow: 0 14px 32px rgba(0,0,0,0.05); color: #333; }
        .stars { color: #d4a017; margin-bottom: 10px; font-size: 18px; }
        .reviewer { color: var(--muted); font-weight: 600; font-size: 14px; }

        .newsletter { max-width: 820px; margin: 0 auto; background: #fff; padding: 28px; border-radius: 18px; border: 1px solid var(--border); box-shadow: 0 14px 32px rgba(0,0,0,0.05); }
        .newsletter form { display: grid; grid-template-columns: 1fr auto; gap: 12px; margin-top: 14px; }
        .newsletter input[type=email] { padding: 14px; border-radius: 12px; border: 1px solid var(--border); background: #fafafa; color: #333; font-size: 15px; }
        .btn-primary { background: var(--accent); color: #fff; padding: 14px 18px; border: none; border-radius: 12px; font-weight: 700; cursor: pointer; }
        .btn-primary:hover { filter: brightness(1.05); }
        .checkbox { display: flex; align-items: center; gap: 8px; color: var(--muted); font-size: 13px; }

        footer { border-top: 1px solid var(--border); padding: 40px 22px 20px; background: #ffffff; }
        .footer-inner { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px,1fr)); gap: 22px; color: var(--muted); }
        .footer-title { color: #111; font-weight: 600; margin-bottom: 12px; letter-spacing: 0.5px; }
        .footer-links a { display: block; color: var(--muted); padding: 4px 0; }
        .footer-logo { font-weight: 700; letter-spacing: 3px; font-size: 20px; color: #111; }
        .copyright { text-align: center; margin-top: 16px; color: var(--muted); font-size: 13px; }

        @media (max-width: 960px) {
            .nav { flex-wrap: wrap; }
            .menu { flex-wrap: wrap; justify-content: center; width: 100%; }
            .icons { width: 100%; justify-content: center; }
            .hero { height: auto; padding: 80px 20px; }
            .section-heading { flex-direction: column; align-items: flex-start; }
            .newsletter form { grid-template-columns: 1fr; }
            .mood-section { grid-template-columns: 1fr; }
        }
</style>
</head>
<body>
<header>
    <div class="nav">
        <div class="logo">ZEN</div>
        <nav class="menu">
            <div class="menu-item">CATEGORIES
                <div class="dropdown">
                    <a href="#">Shackets</a>
                    <a href="#">Cuban Shirts</a>
                    <a href="#">Formal</a>
                    <a href="#">Denim</a>
                </div>
            </div>
            <a class="menu-item" href="#">SHOP</a>
            <a class="menu-item" href="#">CLASSICS</a>
            <a class="menu-item" href="#">ABOUT</a>
            <a class="menu-item" href="#">CONTACT</a>
            <a class="menu-item" href="#">CUSTOM</a>
        </nav>
        <div class="icons">
            <button class="icon-btn" aria-label="Search">🔍</button>
            <button class="icon-btn" aria-label="User login">👤</button>
            <div class="badge">Wishlist (0)</div>
            <div class="badge">Cart (0)</div>
        </div>
    </div>
</header>

<section class="hero">
    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1600&q=80" alt="Hero background with two models" />
    <div class="hero-content">
        <div class="eyebrow">STYLE MEETS CONTRAST</div>
        <h1>From boardroom to street, we've got you.</h1>
        <p>Precision tailoring, relaxed movement, and bold contrasts curated for everyday sophistication.</p>
        <span class="tag">SHACKET X RELAXED SHIRT</span>
    </div>
</section>

<section id="classics">
    <div class="section-heading">
        <h2>Zen Classics</h2>
        <div class="pill">Seasonal bestsellers with curated offers</div>
    </div>
    <div class="carousel" data-carousel="classics">
        <div class="carousel-track">
            <?php foreach ($zenClassics as $item): ?>
            <div class="card">
                <span class="discount"><?= htmlspecialchars($item['discount']); ?></span>
                <img src="<?= $item['image']; ?>" alt="<?= htmlspecialchars($item['title']); ?>">
                <div class="card-body">
                    <p class="card-cat"><?= htmlspecialchars($item['category']); ?></p>
                    <h3 class="card-title"><?= htmlspecialchars($item['title']); ?></h3>
                    <div class="price"><?= formatBDT($item['price']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-controls">
            <div class="control-btn" data-dir="prev">⟵</div>
            <div class="control-btn" data-dir="next">⟶</div>
        </div>
    </div>
</section>

<section id="categories">
    <div class="section-heading"><h2>Browse by Mood</h2></div>
    <?php foreach ($moods as $index => $mood): ?>
        <div class="mood-section <?= $index % 2 === 1 ? 'reverse' : ''; ?>">
            <div class="mood-content">
                <h3 class="mood-title"><?= htmlspecialchars($mood['title']); ?></h3>
                <p class="mood-text"><?= htmlspecialchars($mood['description']); ?></p>
                <a href="#" class="ghost-btn"><?= htmlspecialchars($mood['cta']); ?> →</a>
            </div>
            <div class="mood-image">
                <img src="<?= $mood['image']; ?>" alt="<?= htmlspecialchars($mood['title']); ?>" />
            </div>
        </div>
    <?php endforeach; ?>
</section>

<section id="style-grid">
    <div class="section-heading"><h2>Style in Your Way</h2></div>
    <div class="grid-products">
        <?php foreach ($styleGrid as $item): ?>
            <div class="card">
                <img src="<?= $item['image']; ?>" alt="<?= htmlspecialchars($item['title']); ?>">
                <div class="card-body">
                    <h3 class="card-title"><?= htmlspecialchars($item['title']); ?></h3>
                    <div class="price"><?= formatBDT($item['price']); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="trends">
    <div class="section-heading">
        <h2>STAY ON TRENDS</h2>
        <div class="pill">Fresh drops and featured picks</div>
    </div>
    <div class="carousel" data-carousel="trending">
        <div class="carousel-track">
            <?php foreach ($trending as $item): ?>
            <div class="card">
                <img src="<?= $item['image']; ?>" alt="<?= htmlspecialchars($item['title']); ?>">
                <div class="card-body">
                    <p class="card-cat">Featured</p>
                    <h3 class="card-title"><?= htmlspecialchars($item['title']); ?></h3>
                    <div class="price"><?= formatBDT($item['price']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-controls">
            <div class="control-btn" data-dir="prev">⟵</div>
            <div class="control-btn" data-dir="next">⟶</div>
        </div>
    </div>
</section>

<section id="reviews">
    <div class="section-heading"><h2>Customer Reviews</h2></div>
    <div class="reviews">
        <div class="carousel" data-carousel="reviews">
            <div class="carousel-track">
                <?php foreach ($reviews as $review): ?>
                    <div class="review-card">
                        <div class="stars">★★★★★<?= $review['rating'] < 5 ? str_repeat('☆', 5 - $review['rating']) : ''; ?></div>
                        <p><?= htmlspecialchars($review['text']); ?></p>
                        <div class="reviewer">— <?= htmlspecialchars($review['name']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="carousel-controls">
                <div class="control-btn" data-dir="prev">⟵</div>
                <div class="control-btn" data-dir="next">⟶</div>
            </div>
        </div>
    </div>
</section>

<section id="newsletter">
    <div class="newsletter">
        <h2>Stay ahead with Zen</h2>
        <p>Sign up for insider drops, early access, and curated looks.</p>
        <form>
            <input type="email" placeholder="Enter your email" required />
            <button type="submit" class="btn-primary">Subscribe</button>
            <label class="checkbox">
                <input type="checkbox" required />
                I agree to the Terms and Conditions
            </label>
        </form>
    </div>
</section>

<footer>
    <div class="footer-inner">
        <div>
            <div class="footer-logo">ZEN</div>
            <p>Style that balances bold contrasts with effortless comfort.</p>
        </div>
        <div>
            <div class="footer-title">Navigate</div>
            <div class="footer-links">
                <a href="#">About</a>
                <a href="#">Careers</a>
                <a href="#">Contact Us</a>
                <a href="#">Blog</a>
            </div>
        </div>
        <div>
            <div class="footer-title">Support</div>
            <div class="footer-links">
                <a href="#">My Account</a>
                <a href="#">Legal Info</a>
                <a href="#">Exchange Policy</a>
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
        <div>
            <div class="footer-title">Social</div>
            <div class="footer-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">My Orders</a>
            </div>
        </div>
    </div>
    <div class="copyright">© <?= date('Y'); ?> ZEN Attire. All rights reserved.</div>
</footer>

<script>
    const carousels = document.querySelectorAll('[data-carousel]');

    carousels.forEach((carousel) => {
        const track = carousel.querySelector('.carousel-track');
        const items = carousel.querySelectorAll('.carousel-track > *');
        const prev = carousel.querySelector('[data-dir="prev"]');
        const next = carousel.querySelector('[data-dir="next"]');
        let index = 0;

        const update = () => {
            const width = items[0].getBoundingClientRect().width + 18;
            track.style.transform = `translateX(${-index * width}px)`;
        };

        prev?.addEventListener('click', () => {
            index = Math.max(index - 1, 0);
            update();
        });
        next?.addEventListener('click', () => {
            const maxIndex = Math.max(items.length - Math.floor(track.parentElement.offsetWidth / (items[0].offsetWidth + 18)), 0);
            index = Math.min(index + 1, maxIndex);
            update();
        });

        window.addEventListener('resize', update);
        update();
    });
</script>
</body>
</html>
