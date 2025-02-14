CREATE DATABASE food_ordering;
USE food_ordering;

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    image VARCHAR(100)
);

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    customer_name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    product_id INT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    country VARCHAR(100) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO products (name, price, quantity, description, country, image) VALUES
('Italian Truffle Oil', 6800.00, '250ml bottle', 'Premium extra virgin olive oil infused with real black truffle essence.', 'Italy', 'truffle_oil.jpg'),
('Mexican Mole Sauce', 2900.00, '300g jar', 'Traditional mole sauce made with chili peppers, nuts, and chocolate.', 'Mexico', 'mole_sauce.jpg'),
('French Lavender Honey', 4400.00, '250g jar', 'Pure, aromatic honey sourced from lavender fields in Provence.', 'France', 'lavender_honey.jpg'),
('Sri Lankan Coconut Sambol Mix', 1140.00, '500g', 'Authentic Sri Lankan coconut sambol blend.', 'Sri Lanka', 'coconut_sambol.jpg'),
('Korean Kimchi Seasoning Powder', 8000.00, '100g', 'Traditional kimchi seasoning mix with chili, garlic, and spices.', 'South Korea', 'kimchi_powder.jpg'),
('Moroccan Harissa Paste', 3600.00, '226g jar', 'Spicy and aromatic harissa paste made with roasted chili peppers.', 'Morocco', 'harissa_paste.jpg'),
('Japanese Nori Sheets', 1700.00, '8 sheets', 'Premium roasted seaweed sheets for sushi.', 'Japan', 'nori_sheets.jpg'),
('Turkish Delight with Pistachios', 6200.00, '250g box', 'Authentic Turkish delight made with rosewater and pistachios.', 'Turkey', 'turkish_delight.jpg'),
('Greek Kalamata Olives', 2300.00, '500g jar', 'Traditional Kalamata olives preserved in brine.', 'Greece', 'kalamata_olives.jpg'),
('Finch Organic Quinoa Grain', 990.00, '150g', 'Organic Quinoa rich in protein and fiber.', 'Peru', 'quinoa.jpg'),
('Ethiopian Yirgacheffe Coffee Beans', 6300.00, '453g', 'Single-origin Ethiopian coffee with a floral aroma.', 'Ethiopia', 'coffee_beans.jpg'),
('Thai Green Curry Paste', 280.00, '60g', 'Authentic Thai green curry paste for rich flavors.', 'Thailand', 'green_curry_paste.jpg');

CREATE TABLE csr (
    id INT AUTO_INCREMENT PRIMARY KEY,
    initiative TEXT NOT NULL
);

INSERT INTO csr (initiative) VALUES
('Prioritize recyclable and biodegradable packaging during distribution'),
('Implement efficient distribution routes to reduce fuel consumption and vehicle emissions'),
('Partner with environmentally friendly delivery services'),
('Ensure safe working conditions and environmental responsibility throughout the supply chain'),
('Support culinary education programs: Sponsor scholarships or provide resources for culinary schools and training programs for underprivileged youth');