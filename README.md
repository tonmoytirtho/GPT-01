# ZESS TYRE – JK-Inspired Hybrid Homepage (Version 3)

This document specifies a full, long-scroll desktop homepage for **ZESS TYRE**, combining user-first tools and corporate storytelling in a JK Tyre-inspired hierarchy. Canvas is 2560px wide with 1440px max content width on a 12-column grid. Section spacing uses 80–120px vertical padding, card padding is 24–32px with 8–10px radius and subtle premium shadows. Primary accent color is **#FF6A00**, background white with light greys (#F2F2F2–#F5F5F5), dark text (#111–#333), and charcoal footers (#0A0A0A–#101010). Headings use bold geometric sans (Poppins/Inter-like); body is clean sans. Primary buttons are solid orange with white text; secondary buttons are bordered black/transparent. All imagery is realistic tyre-industry photography from Unsplash using only the provided tyre-related themes; if unavailable, use close-up tyre texture.

## How to run locally
1. Open `index.html` in any modern browser. All styling is loaded from `style.css`, behavior from `script.js`, and imagery from Unsplash queries (no local assets required).
2. The Tyre Finder card supports two tabs (By Vehicle / By Size); selecting options updates the result message inline without a backend.

---
## 1) Mega Header (fixed/sticky)
- **Top utility bar (32–40px, dark subtle band):** left links “For Business”, “Support”, “Dealer Portal”; right “Contact Us”, phone icon, EN/BN toggle.
- **Main nav (56–64px, white with shadow):** ZESS TYRE logo left; center menu: Home, Find Your Tyre, Products, Solutions, Quality & Manufacturing, Dealer Network, Support, Company; right icons/buttons: search, primary “Enquire Now”, secondary “Find a Dealer”.

## 2) Hero with Tyre Finder (780–880px)
- Background: wide industrial hero image (“tyre manufacturing factory”/“tire production line”/“tire curing press”) with dark gradient overlay.
- **Left (col ~5–6):** H1 “Tyres Engineered for Bangladesh Roads.”; subheadline highlighting Motorcycle, 3-Wheeler, EV, LCV, Farm/Tiller focus; buttons: primary “Enquire Now”, secondary “Explore Products”; vehicle tag pills: Motorcycle • 3-Wheeler & EV • LCV • Farm/Tiller • Inner Tubes • Allied Products.
- **Right (col ~6–7): Tyre Finder card (420–500px wide/420–500px tall):** white, rounded, shadow. Title “Tyre Finder”; tabs “By Vehicle” (active) and “By Size”. Fields: Vehicle Type (Motorcycle, 3-Wheeler, EV, LCV, Farm/Tiller), Tyre Position (Front/Rear/All), Tyre Size dropdown placeholder; full-width primary button “Search Tyres”. “By Size” tab allows numeric width/aspect/rim inputs. No imagery inside card.

## 3) Browse by Vehicle band (480–560px, light background #F7F7F7)
Title “Browse by Vehicle”. Six tiles (~220–260px wide, 260–300px tall): Motorcycle (“motorcycle tire closeup”), 3-Wheeler (“three wheeler tire”), EV/E-Rickshaw (“e rickshaw tire”), LCV (“light truck tire closeup”), Farm/Tiller (“agriculture tiller tire”), Inner Tubes & HCV/LTB (“inner tube rubber”). Each tile: image, title, small link “View Tyres →”.

## 4) Our Product Range (600–720px, light grey #F2F2F2)
Title “Our Product Range”. Seven catalogue cards (~320–360px wide, 260–320px tall), layout 3–3–1 or 4–3: Motorcycle Tyres; 3-Wheeler Tyres; EV Tyres (E-Rickshaw); LCV Tyres; Farm/Tiller Tyres; Inner Tubes (incl. HCV/LTB); Allied Products (PCT, Bonding Gum, Flaps, Sole Sheet). Each card: relevant tyre image, title, one-line description, “Explore →”.

## 5) Shop by Application band (400–480px, white)
Title “Shop by Application”. Four equal cards (~300–340px wide, 240–280px tall): Daily Commute; Commercial Load; Rough Terrain; High Mileage. Each uses tyre tread/usage thumbnails (e.g., “motorcycle tire closeup”, “tire warehouse stacks”), includes title, 1–2 line description, “Explore →”.

## 6) Solutions for Business Partners (520–640px)
Title “Solutions for Business Partners”. Four B2B cards (~320–360px wide, 260–320px tall):
1. Fleets & Commercial – “tire warehouse stacks”.
2. Dealers – “tire workshop”.
3. Distributors & Export – warehouse/pallets “tire warehouse stacks”.
4. OEM Partnerships – “tire production line”.
Each card: industrial image, title, 2–3 line description, button “Learn More”.

## 7) Dealer Network & Partnerships (520–640px, light grey #F2F2F2)
Two-column emphasis. Left (~60% width) Dealer Locator card (320–380px tall): white with shadow, background image “tire workshop”/“tire fitting mechanic”; title “Find Your Nearest ZESS Dealer”; line “Search authorized dealers across Bangladesh.”; primary button “Open Dealer Locator”. Right (~40% width) Become a Dealer card (280–340px tall): white, 3–4 bullet benefits, button “Become a Dealer”. Below: inline stats “5000+ Dealers | 1000+ Distributors | Nationwide Coverage”.

## 8) Support & Resources (520–640px, white)
Intro text plus grid of five support cards (~260–300px wide, 220–260px tall): Tyre Care & Safety (“tire inspection”); Fitment & Rotation (“tire fitting mechanic”); FAQs (icon/texture “motorcycle tire closeup”); Warranty & Claims (“tire testing lab”); Download Centre (“tire warehouse stacks”). Each: small thumbnail top, title, 1-line description, “View →”.

## 9) Quality & Manufacturing Excellence (600–720px)
Two-column layout on white with possible angled ZESS orange accent. Left: large industrial image (“tire testing lab” or “rubber processing machinery” or “tire production line”). Right: title “Quality & Manufacturing Excellence”, 4–6 lines on R&D, compounds, testing, durability, certifications; feature chips for R&D, Testing, Certifications, Warranty; primary button “Discover Our Process”.

## 10) News & Highlights (520–640px, #F5F5F5)
Title “News & Highlights”. Three cards (~360–400px wide, 260–320px tall): tyre factory/launch/event imagery; headline placeholder; 2-line excerpt; date; “Read More →”.

## 11) ZESS at a Glance (260–320px, dark #0D0D0D)
Centered title (white). Four KPIs: 5000+ Dealers; 1000+ Distributors; 30+ Years of Experience; Millions of Tyres Produced Annually. Large numbers with small labels. Below: inline links “About Us | Quality & Manufacturing | Careers”.

## 12) Full Corporate Footer (360–440px, #0A0A0A–#0C0C0C)
Four columns inside 1440px container:
1. **Find Your Tyre:** Motorcycle Tyres; 3-Wheeler & EV Tyres; LCV Tyres; Farm/Tiller Tyres; Inner Tubes; Allied Products.
2. **Support:** Tyre Care & Safety; Fitment & Rotation; Warranty & Claims; FAQs; Download Centre.
3. **Business:** For Fleets; Become a Dealer; Distributors & Export; OEMs; B2B Portal.
4. **Company:** About; Quality & Manufacturing; News & Blog; Careers; Contact Us.
Bottom bar (40–56px): left “© ZESS TYRE”; right “Privacy Policy | Terms of Use | Cookie Policy”.

---
### Image usage rules (strict)
Use only realistic tyre-industry Unsplash photography with these search topics: “tyre manufacturing factory”, “tire production line”, “tire curing press”, “tire testing lab”, “tire inspection”, “rubber processing machinery”, “tire warehouse stacks”, “motorcycle tire closeup”, “three wheeler tire”, “e rickshaw tire”, “light truck tire closeup”, “agriculture tiller tire”, “inner tube rubber”, “tire workshop”, “tire fitting mechanic”. Reject generic office/people/lifestyle imagery; if nothing suitable, use close-up tyre texture instead. Hero images 16:9–21:9 (700–900px tall); product cards 4:3/1:1 (~260–320px); B2B/support 3:2 (~220–280px).

### Global canvas, grid, and styling
- Canvas 2560px wide; content max width 1440px centered on 12-column grid with equal gutters.
- Section padding 80–120px top/bottom; no overlapping or repeated headers/footers mid-page.
- Card padding 24–32px, radius 8–10px, subtle premium shadows.
- Color palette: primary accent #FF6A00; light backgrounds #F2F2F2–#F7F7F7; dark bands #0D0D0D–#101010; headings #111–#1A1A1A; body #333.
- Typography: headings bold geometric sans; body modern clean sans; buttons semi-bold (primary solid orange with white text, secondary bordered black/transparent).

This single-scrolling page maintains the hierarchy: Hero with Tyre Finder → Browse by Vehicle → Product Range → Shop by Application → B2B Solutions → Dealer Network → Support → Quality → News → Stats → Footer. No extra sections or mid-page headers/footers.
