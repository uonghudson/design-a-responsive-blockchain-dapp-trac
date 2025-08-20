<?php

// Project Configuration
const PROJECT_NAME = 'Blockchain dApp Tracker';
const PROJECT_DESC = 'A responsive blockchain-based decentralized application tracker';
const PROJECT_VERSION = '1.0.0';

// Blockchain Configuration
const BLOCKCHAIN_NETWORK = 'ethereum'; // Supported networks: ethereum, binance, polygon
const BLOCKCHAIN_NODE_URL = 'https://mainnet.infura.io/v3/YOUR_PROJECT_ID';
const BLOCKCHAIN_CONTRACT_ADDRESS = '0x...YourContractAddress...';

// Database Configuration
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'password';
const DB_NAME = 'dapp_tracker';

// Frontend Configuration
const RESPONSE_WIDTH_BREAKPOINTS = [
    'xs' => 480,
    'sm' => 768,
    'md' => 992,
    'lg' => 1200,
    'xl' => 1920
];

// Tracker Configuration
const TRACKER_UPDATE_INTERVAL = 10; // seconds
const TRACKER_DATA_LIMIT = 100; // limit of data to display on dashboard

// API Configuration
const API_KEY = 'YOUR_API_KEY';
const API_SECRET_KEY = 'YOUR_API_SECRET_KEY';
const API_BASE_URL = 'https://api.example.com/v1';

// Third-Party Services
const CHART_LIBRARY = 'chartjs'; // Supported libraries: chartjs, d3js
const ALERT_SERVICE = 'telegram'; // Supported services: telegram, discord, email

?>