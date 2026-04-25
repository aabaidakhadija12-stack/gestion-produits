<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        $produits = [
            ['nom' => 'Laptop Dell XPS 15', 'description' => 'Ordinateur portable haute performance Intel i7', 'prix' => 12500, 'quantite' => 8],
            ['nom' => 'Laptop HP Pavilion', 'description' => 'Ordinateur portable AMD Ryzen 5', 'prix' => 7800, 'quantite' => 12],
            ['nom' => 'MacBook Air M2', 'description' => 'Ordinateur Apple puce M2 8GB RAM', 'prix' => 18900, 'quantite' => 5],
            ['nom' => 'Laptop Lenovo ThinkPad', 'description' => 'Ordinateur professionnel Intel i5', 'prix' => 9200, 'quantite' => 9],
            ['nom' => 'Laptop Asus ROG', 'description' => 'Laptop gaming RTX 3060', 'prix' => 15600, 'quantite' => 3],
            ['nom' => 'Souris Logitech MX Master', 'description' => 'Souris sans fil ergonomique', 'prix' => 450, 'quantite' => 25],
            ['nom' => 'Souris Razer DeathAdder', 'description' => 'Souris gaming filaire', 'prix' => 320, 'quantite' => 18],
            ['nom' => 'Souris Apple Magic Mouse', 'description' => 'Souris sans fil multi-touch', 'prix' => 580, 'quantite' => 10],
            ['nom' => 'Clavier Mécanique RGB', 'description' => 'Clavier switches rouges Cherry MX', 'prix' => 380, 'quantite' => 15],
            ['nom' => 'Clavier Apple Magic', 'description' => 'Clavier sans fil Touch ID', 'prix' => 620, 'quantite' => 7],
            ['nom' => 'Clavier Logitech K380', 'description' => 'Clavier Bluetooth multi-appareils', 'prix' => 280, 'quantite' => 22],
            ['nom' => 'Écran Samsung 27"', 'description' => 'Écran 4K IPS 144Hz', 'prix' => 3200, 'quantite' => 6],
            ['nom' => 'Écran LG UltraWide 34"', 'description' => 'Écran ultra-large 2560x1080', 'prix' => 4800, 'quantite' => 4],
            ['nom' => 'Écran Dell 24" FHD', 'description' => 'Écran Full HD IPS anti-reflet', 'prix' => 1900, 'quantite' => 11],
            ['nom' => 'Écran ASUS ProArt 32"', 'description' => 'Écran 4K pour créatifs', 'prix' => 6500, 'quantite' => 2],
            ['nom' => 'Casque Sony WH-1000XM5', 'description' => 'Casque Bluetooth noise cancelling', 'prix' => 1800, 'quantite' => 12],
            ['nom' => 'Casque Bose QC45', 'description' => 'Casque sans fil réduction de bruit', 'prix' => 2100, 'quantite' => 8],
            ['nom' => 'Écouteurs AirPods Pro', 'description' => 'Écouteurs Apple ANC', 'prix' => 1650, 'quantite' => 14],
            ['nom' => 'Écouteurs Samsung Galaxy Buds', 'description' => 'Écouteurs sans fil TWS', 'prix' => 890, 'quantite' => 16],
            ['nom' => 'Webcam Logitech C920', 'description' => 'Webcam HD 1080p 30fps', 'prix' => 620, 'quantite' => 3],
            ['nom' => 'Webcam Razer Kiyo Pro', 'description' => 'Webcam 1080p 60fps', 'prix' => 950, 'quantite' => 6],
            ['nom' => 'Disque SSD 1TB NVMe', 'description' => 'SSD Samsung 970 EVO Plus', 'prix' => 890, 'quantite' => 20],
            ['nom' => 'Disque SSD 500GB', 'description' => 'SSD Kingston A2000', 'prix' => 480, 'quantite' => 25],
            ['nom' => 'Disque Dur Externe 2TB', 'description' => 'HDD portable WD Elements', 'prix' => 520, 'quantite' => 17],
            ['nom' => 'Disque Dur Externe 4TB', 'description' => 'HDD portable Seagate Backup Plus', 'prix' => 780, 'quantite' => 9],
            ['nom' => 'RAM 16GB DDR4', 'description' => 'Mémoire Corsair Vengeance 3200MHz', 'prix' => 420, 'quantite' => 18],
            ['nom' => 'RAM 32GB DDR4', 'description' => 'Mémoire G.Skill Ripjaws 3600MHz', 'prix' => 750, 'quantite' => 10],
            ['nom' => 'Carte Graphique RTX 4060', 'description' => 'GPU Nvidia 8GB GDDR6', 'prix' => 5800, 'quantite' => 4],
            ['nom' => 'Carte Graphique RX 6700', 'description' => 'GPU AMD 10GB GDDR6', 'prix' => 4900, 'quantite' => 3],
            ['nom' => 'Processeur Intel i9', 'description' => 'CPU Intel Core i9-13900K', 'prix' => 4200, 'quantite' => 5],
            ['nom' => 'Processeur AMD Ryzen 9', 'description' => 'CPU AMD Ryzen 9 7900X', 'prix' => 3800, 'quantite' => 6],
            ['nom' => 'Carte Mère ASUS Z790', 'description' => 'Carte mère ATX Intel LGA1700', 'prix' => 2900, 'quantite' => 4],
            ['nom' => 'Alimentation 750W', 'description' => 'PSU Corsair RM750x 80+ Gold', 'prix' => 980, 'quantite' => 8],
            ['nom' => 'Boîtier PC NZXT H510', 'description' => 'Boîtier ATX Mid-Tower verre trempé', 'prix' => 1100, 'quantite' => 7],
            ['nom' => 'Refroidisseur CPU Noctua', 'description' => 'Ventirad NH-D15 double tour', 'prix' => 650, 'quantite' => 11],
            ['nom' => 'Hub USB-C 7 en 1', 'description' => 'Adaptateur multiport USB-C', 'prix' => 280, 'quantite' => 30],
            ['nom' => 'Câble HDMI 2.1 2m', 'description' => 'Câble HDMI 8K 48Gbps', 'prix' => 95, 'quantite' => 50],
            ['nom' => 'Chargeur USB-C 65W', 'description' => 'Chargeur rapide GaN compact', 'prix' => 220, 'quantite' => 35],
            ['nom' => 'Tapis de souris XXL', 'description' => 'Tapis gaming 90x40cm', 'prix' => 150, 'quantite' => 28],
            ['nom' => 'Support Laptop Réglable', 'description' => 'Support aluminium 6 hauteurs', 'prix' => 190, 'quantite' => 20],
            ['nom' => 'Chaise Gamer DXRacer', 'description' => 'Chaise ergonomique avec repose-pieds', 'prix' => 2100, 'quantite' => 4],
            ['nom' => 'Bureau Réglable Électrique', 'description' => 'Bureau assis-debout mémoire', 'prix' => 4500, 'quantite' => 2],
            ['nom' => 'Imprimante HP LaserJet', 'description' => 'Imprimante laser couleur WiFi duplex', 'prix' => 1350, 'quantite' => 7],
            ['nom' => 'Scanner Epson V39', 'description' => 'Scanner à plat 4800 DPI', 'prix' => 480, 'quantite' => 6],
            ['nom' => 'Routeur WiFi 6 TP-Link', 'description' => 'Routeur AX3000 double bande', 'prix' => 850, 'quantite' => 13],
            ['nom' => 'Switch Réseau 8 ports', 'description' => 'Switch Gigabit non manageable', 'prix' => 180, 'quantite' => 19],
            ['nom' => 'Onduleur 650VA', 'description' => 'UPS APC Back-UPS avec 4 prises', 'prix' => 720, 'quantite' => 8],
            ['nom' => 'Tablette Graphique Wacom', 'description' => 'Tablette Intuos Medium Bluetooth', 'prix' => 1200, 'quantite' => 5],
            ['nom' => 'Micro Blue Yeti', 'description' => 'Microphone USB cardioïde professionnel', 'prix' => 1450, 'quantite' => 7],
            ['nom' => 'Lampe de Bureau LED', 'description' => 'Lampe LED 3 modes luminosité', 'prix' => 120, 'quantite' => 40],
        ];

        foreach ($produits as $produit) {
            Produit::create($produit);
        }

        $this->command->info('50 produits créés avec succès !');
    }
}