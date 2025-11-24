<?php
// Demo data for hero, products, and testimonials
$zenClassics = [
    [
        'title' => 'Slate Cuban Shirt',
        'category' => 'Zen Classics',
        'price' => 1890,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Contrast Line Jacket',
        'category' => 'Zen Classics',
        'price' => 2490,
        'image' => 'https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Relaxed Denim Shirt',
        'category' => 'Denim',
        'price' => 2190,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=700&q=80'
    ],
    [
        'title' => 'Muted Check Shacket',
        'category' => 'Outerwear',
        'price' => 2790,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=700&q=80'
    ]
];

$styleGrid = [
    [
        'title' => 'Urban Night Layer',
        'price' => 1990,
        'image' => 'https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Beachside Linen',
        'price' => 1690,
        'image' => 'https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Boardroom Ready',
        'price' => 2590,
        'image' => 'https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'title' => 'Vintage Edge',
        'price' => 2090,
        'image' => 'https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=800&q=80'
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
            --bg: #0f1115;
            --card: #151821;
            --text: #f6f7fb;
            --muted: #9da3b5;
            --accent: #df9b40;
            --accent-2: #f04f4f;
            --border: #252a35;
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
            background: rgba(15,17,21,0.9);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
        }
        .nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 14px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
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
            color: var(--muted);
        }
        .menu-item {
            position: relative;
            padding: 6px 10px;
            border-radius: 8px;
            transition: color .2s, background .2s;
        }
        .menu-item:hover { color: var(--text); background: rgba(255,255,255,0.04); }
        .dropdown {
            position: absolute;
            top: 110%;
            left: 0;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            min-width: 180px;
            padding: 12px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            opacity: 0;
            pointer-events: none;
            transform: translateY(10px);
            transition: all .2s ease;
        }
        .menu-item:hover .dropdown { opacity: 1; pointer-events: auto; transform: translateY(0); }
        .dropdown a { display: block; padding: 8px 10px; border-radius: 8px; color: var(--muted); }
        .dropdown a:hover { background: rgba(255,255,255,0.06); color: var(--text); }
        .icons { display: flex; align-items: center; gap: 12px; color: var(--muted); }
        .icon-btn { width: 38px; height: 38px; display: grid; place-items: center; border-radius: 50%; border: 1px solid var(--border); background: var(--card); transition: border .2s, transform .2s; }
        .icon-btn:hover { border-color: var(--accent); transform: translateY(-2px); color: var(--text); }
        .badge { font-size: 12px; color: var(--muted); }

        .hero {
            position: relative;
            height: 78vh;
            display: grid;
            place-items: center;
            text-align: center;
            padding: 20px;
            overflow: hidden;
        }
        .hero img {
            position: absolute;
            inset: 0;
            width: 100%; height: 100%; object-fit: cover;
            filter: brightness(0.7);
        }
        .hero-content { position: relative; max-width: 720px; }
        .eyebrow { letter-spacing: 6px; font-size: 12px; color: var(--muted); }
        .hero h1 { font-size: clamp(32px, 6vw, 58px); margin: 12px 0 10px; }
        .hero p { color: var(--muted); margin-bottom: 14px; }
        .tag { display: inline-block; padding: 10px 18px; border: 1px solid var(--accent); border-radius: 999px; color: var(--accent); font-weight: 600; }

        section { padding: 70px 22px; }
        .section-heading { max-width: 1200px; margin: 0 auto 24px; display: flex; align-items: center; justify-content: space-between; gap: 14px; }
        .section-heading h2 { margin: 0; font-size: 26px; letter-spacing: 1px; }
        .pill { padding: 10px 14px; border-radius: 12px; border: 1px solid var(--border); color: var(--muted); font-size: 14px; }

        .carousel {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
        }
        .carousel-track {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: minmax(240px, 1fr);
            gap: 18px;
            transition: transform .35s ease;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 340px;
        }
        .discount {
            position: absolute;
            top: 12px; left: 12px;
            background: var(--accent-2);
            color: #fff;
            padding: 8px 12px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 12px;
        }
        .card-body { padding: 16px; display: flex; flex-direction: column; gap: 6px; flex: 1; }
        .card-title { font-weight: 600; font-size: 18px; margin: 0; }
        .card-cat { color: var(--muted); font-size: 13px; letter-spacing: 0.5px; }
        .price { font-weight: 600; color: var(--text); }

        .carousel-controls {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            pointer-events: none;
        }
        .control-btn {
            width: 40px; height: 40px;
            background: rgba(255,255,255,0.08);
            border: 1px solid var(--border);
            border-radius: 50%;
            color: #fff;
            display: grid; place-items: center;
            cursor: pointer;
            pointer-events: auto;
            transition: transform .2s, border .2s;
        }
        .control-btn:hover { transform: scale(1.05); border-color: var(--accent); }

        .categories-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
        }
        .category-card {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            min-height: 260px;
            display: grid;
            align-items: end;
            background: var(--card);
            box-shadow: 0 16px 40px rgba(0,0,0,0.35);
        }
        .category-card img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; filter: brightness(0.7); }
        .category-overlay {
            position: relative;
            padding: 18px;
            background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 100%);
        }
        .category-title { margin: 0; font-size: 18px; font-weight: 600; }
        .ghost-btn { display: inline-flex; align-items: center; gap: 8px; padding: 10px 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.3); color: #fff; font-weight: 500; }

        .grid-products {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 18px;
        }

        .reviews {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .review-card { background: var(--card); border: 1px solid var(--border); border-radius: 16px; padding: 22px; min-height: 180px; }
        .stars { color: #ffc94f; margin-bottom: 10px; }
        .reviewer { color: var(--muted); font-weight: 600; font-size: 14px; }

        .newsletter {
            max-width: 820px;
            margin: 0 auto;
            background: linear-gradient(120deg, rgba(223,155,64,0.14), rgba(15,17,21,0.9));
            padding: 28px;
            border-radius: 18px;
            border: 1px solid var(--border);
        }
        .newsletter form { display: grid; grid-template-columns: 1fr auto; gap: 12px; margin-top: 14px; }
        .newsletter input[type=email] {
            padding: 14px;
            border-radius: 12px;
            border: 1px solid var(--border);
            background: #0b0c10;
            color: var(--text);
            font-size: 15px;
        }
        .btn-primary { background: var(--accent); color: #0f1115; padding: 14px 18px; border: none; border-radius: 12px; font-weight: 700; cursor: pointer; }
        .btn-primary:hover { filter: brightness(1.05); }
        .checkbox { display: flex; align-items: center; gap: 8px; color: var(--muted); font-size: 13px; }

        footer { border-top: 1px solid var(--border); padding: 40px 22px; background: #0c0e12; }
        .footer-inner { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 22px; color: var(--muted); }
        .footer-title { color: var(--text); font-weight: 600; margin-bottom: 12px; }
        .footer-links a { display: block; color: var(--muted); padding: 4px 0; }
        .footer-logo { font-weight: 700; letter-spacing: 3px; font-size: 20px; color: #fff; }
        .copyright { text-align: center; margin-top: 16px; color: var(--muted); font-size: 13px; }

        .schema-block { margin-top: 12px; background: #0b0c10; border: 1px solid var(--border); border-radius: 12px; padding: 16px; overflow-x: auto; }
        .schema-block code { color: #e8e8e8; font-size: 13px; white-space: pre; display: block; }

        @media (max-width: 960px) {
            .nav { flex-wrap: wrap; }
            .menu { flex-wrap: wrap; justify-content: center; width: 100%; }
            .icons { width: 100%; justify-content: center; }
            .hero { height: auto; padding: 80px 20px; }
            .section-heading { flex-direction: column; align-items: flex-start; }
            .newsletter form { grid-template-columns: 1fr; }
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
    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&w=1600&q=80" alt="Hero background" />
    <div class="hero-content">
        <div class="eyebrow">STYLE MEETS CONTRAST</div>
        <h1>From boardroom to street, we've got you.</h1>
        <p>Discover fresh statements with relaxed silhouettes, premium textures, and bold lines.</p>
        <span class="tag">SHACKET X RELAXED SHIRT</span>
    </div>
</section>

<section id="classics">
    <div class="section-heading">
        <h2>Zen Classics</h2>
        <div class="pill">Featuring seasonal bestsellers with 10% OFF</div>
    </div>
    <div class="carousel" data-carousel="classics">
        <div class="carousel-track">
            <?php foreach ($zenClassics as $item): ?>
            <div class="card">
                <span class="discount">10% OFF</span>
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
    <div class="categories-grid">
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=900&q=80" alt="Bloom Cuban Shirt" />
            <div class="category-overlay">
                <h3 class="category-title">BLOOM CUBAN SHIRT</h3>
                <a href="#" class="ghost-btn">DISCOVER MORE →</a>
            </div>
        </div>
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=900&q=80" alt="Stay young stay funky" />
            <div class="category-overlay">
                <h3 class="category-title">STAY YOUNG STAY FUNKY</h3>
                <a href="#" class="ghost-btn">BROWSE PRODUCTS →</a>
            </div>
        </div>
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=900&q=80" alt="Formal bold looks" />
            <div class="category-overlay">
                <h3 class="category-title">FORMAL BOLD LOOKS</h3>
                <a href="#" class="ghost-btn">DISCOVER MORE →</a>
            </div>
        </div>
        <div class="category-card">
            <img src="https://images.unsplash.com/photo-1492447273231-0f8fece43e67?auto=format&fit=crop&w=900&q=80" alt="Vintage Nostalgics" />
            <div class="category-overlay">
                <h3 class="category-title">VINTAGE NOSTALGICS</h3>
                <a href="#" class="ghost-btn">BROWSE PRODUCTS →</a>
            </div>
        </div>
    </div>
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

<section id="schema">
    <div class="section-heading"><h2>MySQL Schema</h2><div class="pill">Ready for backend wiring</div></div>
    <div class="schema-block">
        <code>
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(160) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(200) NOT NULL,
  description TEXT,
  category VARCHAR(120),
  price DECIMAL(10,2) NOT NULL,
  image_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE carts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE cart_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cart_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT DEFAULT 1,
  FOREIGN KEY (cart_id) REFERENCES carts(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  total DECIMAL(10,2) NOT NULL,
  status VARCHAR(50) DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT DEFAULT 1,
  price DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);
        </code>
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
