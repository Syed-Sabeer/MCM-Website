@extends('layouts.frontend.app.master')

@section('title', 'Metro Cotton Mill - Home')

@section('css')
@endsection

@section('content')

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <div class="pq-breadcrumb-title">
                <h1>Product Details</h1>
              </div>
              <div class="pq-breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('home') }}"
                      ><i class="fas fa-home mr-2"></i>Home</a
                    >
                  </li>
                  <li class="breadcrumb-item">
                    <a href="{{ route('products') }}">Products</a>
                  </li>
                  <li class="breadcrumb-item active">Cotton Tote Bag</li>
                </ol>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb -->

    <section class="pf-body" >
        <div class="pf-container">
            <div class="pf-header">
                <h1><i class="fas fa-shopping-bag"></i> Cotton Tote Bag</h1>
            </div>

            <div class="pf-main-content">
                <div class="pf-product-section">
                    <!-- Image Section -->
                    <div class="pf-image-section">
                        <div class="pf-main-image-wrapper">
                            <img id="pfMainImage" class="pf-main-image" src="https://www.metro-textile.com/ProductImages/zoom_MQTB.jpg" alt="Cotton Tote Bag">
                        </div>

                        <div class="pf-thumbnail-grid">
                            <div class="pf-thumbnail pf-active" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ProductImages/zoom_MQTB.jpg')">
                                <img src="https://www.metro-textile.com/ProductImages/zoom_MQTB.jpg" alt="Maroon">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_922022.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_922022.jpg" alt="Black">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_181422.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_181422.jpg" alt="Blue">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_797122.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_797122.jpg" alt="Red">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_400622.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_400622.jpg" alt="Green">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_96522.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_96522.jpg" alt="Gold">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_361322.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_361322.jpg" alt="Gold">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_459222.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_459222.jpg" alt="Gold">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_333522.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_333522.jpg" alt="Gold">
                            </div>
                            <div class="pf-thumbnail" onclick="pfChangeImage(this, 'https://www.metro-textile.com/ExtraImages/zoom_795622.jpg')">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_795622.jpg" alt="Gold">
                            </div>
                        </div>

                        <div class="pf-action-buttons">
                            <button class="pf-btn pf-btn-secondary" onclick="pfOpenModal('freightModal')">
                                <i class="fas fa-truck"></i> Freight Quote
                            </button>
                            <button class="pf-btn pf-btn-primary" onclick="pfOpenModal('quoteModal')">
                                <i class="fas fa-file-invoice-dollar"></i> Quote
                            </button>
                            <button class="pf-btn pf-btn-secondary" onclick="pfOpenModal('sampleModal')">
                                <i class="fas fa-cube"></i> Sample
                            </button>
                            <button class="pf-btn pf-btn-secondary" onclick="pfOpenModal('imagesModal')">
                                <i class="fas fa-images"></i> Images
                            </button>
                            <button class="pf-btn pf-btn-secondary" onclick="pfOpenModal('templateModal')">
                                <i class="fas fa-file-download"></i> Template
                            </button>
                        </div>
                    </div>

                    <!-- Details Section -->
                    <div class="pf-details-section">
                        <div class="pf-product-meta">
                            <div class="pf-meta-item">
                                <div class="pf-meta-label">Style</div>
                                <div class="pf-meta-value">MQTB</div>
                            </div>
                            <div class="pf-meta-item">
                                <div class="pf-meta-label">Size</div>
                                <div class="pf-meta-value">15"W x 16"H</div>
                            </div>
                        </div>

                        <div class="pf-decoration-tabs">
                            <button class="pf-tab-btn pf-active" onclick="pfSwitchDecoration(this, 'spotPrinting')">
                                <i class="fas fa-paint-brush"></i> Spot Printing
                            </button>
                            <button class="pf-tab-btn" onclick="pfSwitchDecoration(this, 'heatTransfer')">
                                <i class="fas fa-fire"></i> Heat Transfer
                            </button>
                            <button class="pf-tab-btn" onclick="pfSwitchDecoration(this, 'blank')">
                                <i class="fas fa-square"></i> Blank
                            </button>
                        </div>

                        <!-- <div class="pf-overseas-badge">
                            <i class="fas fa-globe"></i> OVERSEAS
                        </div> -->

                        <!-- Pricing Table -->
                         <div id="pfSpotPrinting" class="pf-decoration-content">

                            <div class="na-pricing-section">
                    <div class="na-pricing-header">
                        <i class="fas fa-dollar-sign"></i>
                        <span>Spot Printing - Pricing</span>
                    </div>
                    <table class="na-pricing-table">
                        <thead>
                            <tr>
                                <th>Quantity</th>
                                <th>72</th>
                                <th>288</th>
                                <th>500</th>
                                <th>1000</th>
                                <th>2000</th>
                                <th>3000</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Natural</td>
                                <td>$4.02</td>
                                <td>$3.27</td>
                                <td>$2.94</td>
                                <td>$2.77</td>
                                <td>$2.58</td>
                                <td>$2.48</td>
                            </tr>
                            <tr>
                                <td>Colors</td>
                                <td>$5.00</td>
                                <td>$4.23</td>
                                <td>$3.90</td>
                                <td>$3.73</td>
                                <td>$3.54</td>
                                <td>$3.44</td>
                            </tr>
                            <tr>
                                <td>Add Location</td>
                                <td>$1.81</td>
                                <td>$1.31</td>
                                <td>$1.06</td>
                                <td>$0.94</td>
                                <td>$0.81</td>
                                <td>$0.71</td>
                            </tr>
                            <tr>
                                <td>Add Color</td>
                                <td>$0.50</td>
                                <td>$0.38</td>
                                <td>$0.35</td>
                                <td>$0.30</td>
                                <td>$0.25</td>
                                <td>$0.20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                            <!-- <div class="pf-pricing-table">
                                <div class="pf-pricing-header">
                                    <i class="fas fa-dollar-sign"></i> SPOT PRINTING - Pricing
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Quantity</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">72</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">288</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">500</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">1000</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">2000</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">3000</div>
                                    <div class="pf-pricing-cell">R</div>
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Natural</div>
                                    <div class="pf-pricing-cell">$4.02</div>
                                    <div class="pf-pricing-cell">$3.27</div>
                                    <div class="pf-pricing-cell">$2.94</div>
                                    <div class="pf-pricing-cell">$2.77</div>
                                    <div class="pf-pricing-cell">$2.58</div>
                                    <div class="pf-pricing-cell">$2.48</div>
                                    <div class="pf-pricing-cell">R</div>
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Colors</div>
                                    <div class="pf-pricing-cell">$5.00</div>
                                    <div class="pf-pricing-cell">$4.23</div>
                                    <div class="pf-pricing-cell">$3.90</div>
                                    <div class="pf-pricing-cell">$3.73</div>
                                    <div class="pf-pricing-cell">$3.54</div>
                                    <div class="pf-pricing-cell">$3.44</div>
                                    <div class="pf-pricing-cell">R</div>
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Add Location</div>
                                    <div class="pf-pricing-cell">$1.81</div>
                                    <div class="pf-pricing-cell">$1.31</div>
                                    <div class="pf-pricing-cell">$1.06</div>
                                    <div class="pf-pricing-cell">$0.94</div>
                                    <div class="pf-pricing-cell">$0.81</div>
                                    <div class="pf-pricing-cell">$0.71</div>
                                    <div class="pf-pricing-cell">V</div>
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Add Color</div>
                                    <div class="pf-pricing-cell">$0.50</div>
                                    <div class="pf-pricing-cell">$0.38</div>
                                    <div class="pf-pricing-cell">$0.35</div>
                                    <div class="pf-pricing-cell">$0.30</div>
                                    <div class="pf-pricing-cell">$0.25</div>
                                    <div class="pf-pricing-cell">$0.20</div>
                                    <div class="pf-pricing-cell">V</div>
                                </div>
                            </div> -->

                            <!-- <div class="pf-info-grid">
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-check-circle"></i> Price Includes</div>
                                    <div class="pf-info-value">1 Color, 1 Location</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-clock"></i> Lead Time</div>
                                    <div class="pf-info-value">5-7 Business Days</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-shipping-fast"></i> Rush Available</div>
                                    <div class="pf-info-value">Yes, Pls contact customer service</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-ruler"></i> Imprint Area</div>
                                    <div class="pf-info-value">10"W x 12"H</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-dollar-sign"></i> Setup Charge</div>
                                    <div class="pf-info-value">$ 56.25 (V)</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-redo"></i> Repeat Setup</div>
                                    <div class="pf-info-value">$ 25.00 (V)</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-bolt"></i> Flash Charge - If White</div>
                                    <div class="pf-info-value">$ 0.31 (V)</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-palette"></i> PMS Match</div>
                                    <div class="pf-info-value">$ 25.00 (V)</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-sort-amount-down"></i> Less Than Minimum</div>
                                    <div class="pf-info-value">$ 50.00 (V)</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-exchange-alt"></i> Color Change Fee</div>
                                    <div class="pf-info-value">$ 18.75 (V)</div>
                                </div>
                                <div class="pf-info-item">
                                    <div class="pf-info-label"><i class="fas fa-vial"></i> Spec Sample / Pre Pro</div>
                                    <div class="pf-info-value">Contact for pricing</div>
                                </div>
                            </div> -->

                        <div class="na-info-grid">
                            <div class="na-info-card">
                                <div class="na-info-left">
                                    <div class="na-info-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <span class="na-info-label">Price Includes</span>
                                </div>
                                <span class="na-info-value">1 Color, 1 Location</span>
                            </div>

                            <div class="na-info-card">
                                <div class="na-info-left">
                                    <div class="na-info-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <span class="na-info-label">Rush Available</span>
                                </div>
                                <span class="na-info-value">Contact Customer Service</span>
                            </div>

                            <div class="na-info-card">
                                <div class="na-info-left">
                                    <div class="na-info-icon">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                    <span class="na-info-label">Setup Charge</span>
                                </div>
                                <span class="na-info-value">$56.25 (V)</span>
                            </div>

                            <div class="na-info-card">
                                <div class="na-info-left">
                                    <div class="na-info-icon">
                                        <i class="fas fa-redo"></i>
                                    </div>
                                    <span class="na-info-label">Repeat Setup</span>
                                </div>
                                <span class="na-info-value">$25.00 (V)</span>
                            </div>

                            <div class="na-info-card">
                                <div class="na-info-left">
                                    <div class="na-info-icon">
                                        <i class="fas fa-bolt"></i>
                                    </div>
                                    <span class="na-info-label">Flash Charge</span>
                                </div>
                                <span class="na-info-value">$0.31 (V)</span>
                            </div>

                            <div class="na-info-card">
                                <div class="na-info-left">
                                    <div class="na-info-icon">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                    <span class="na-info-label">PMS Match</span>
                                </div>
                                <span class="na-info-value">$25.00 (V)</span>
                            </div>
                        </div>
                        </div>





                        <div id="pfHeatTransfer" class="pf-decoration-content" style="display: none;">
                            <!-- <div class="pf-pricing-table">
                                <div class="pf-pricing-header">
                                    <i class="fas fa-fire"></i> HEAT TRANSFER - Pricing
                                </div>
                                <div class="pf-info-grid" style="margin-top: 20px;">
                                    <div class="pf-info-item">
                                        <div class="pf-info-label"><i class="fas fa-info-circle"></i> Information</div>
                                        <div class="pf-info-value">Heat Transfer pricing available upon request</div>
                                    </div>
                                    <div class="pf-info-item">
                                        <div class="pf-info-label"><i class="fas fa-clock"></i> Lead Time</div>
                                        <div class="pf-info-value">7-10 Business Days</div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="na-pricing-section">
                                <div class="na-pricing-header">
                                    <i class="fas fa-fire"></i> HEAT TRANSFER - Pricing
                                </div>
                                <table class="na-pricing-table">
                                    <thead>
                                        <tr>
                                            <th>Quantity</th>
                                            <th>72</th>
                                            <th>288</th>
                                            <th>500</th>
                                            <th>1000</th>
                                            <th>2000</th>
                                            <th>3000</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Natural</td>
                                            <td>$4.02</td>
                                            <td>$3.27</td>
                                            <td>$2.94</td>
                                            <td>$2.77</td>
                                            <td>$2.58</td>
                                            <td>$2.48</td>
                                        </tr>
                                        <tr>
                                            <td>Colors</td>
                                            <td>$5.00</td>
                                            <td>$4.23</td>
                                            <td>$3.90</td>
                                            <td>$3.73</td>
                                            <td>$3.54</td>
                                            <td>$3.44</td>
                                        </tr>
                                        <tr>
                                            <td>Add Location</td>
                                            <td>$1.81</td>
                                            <td>$1.31</td>
                                            <td>$1.06</td>
                                            <td>$0.94</td>
                                            <td>$0.81</td>
                                            <td>$0.71</td>
                                        </tr>
                                        <tr>
                                            <td>Add Color</td>
                                            <td>$0.50</td>
                                            <td>$0.38</td>
                                            <td>$0.35</td>
                                            <td>$0.30</td>
                                            <td>$0.25</td>
                                            <td>$0.20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="pfBlank" class="pf-decoration-content" style="display: none;">
                            <!-- <div class="pf-pricing-table">
                                <div class="pf-pricing-header">
                                    <i class="fas fa-square"></i> BLANK - Pricing
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Quantity</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">72</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">288</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">500</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">1000</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">2000</div>
                                    <div class="pf-pricing-cell pf-pricing-qty">3000</div>
                                    <div class="pf-pricing-cell">R</div>
                                </div>
                                <div class="pf-pricing-row">
                                    <div class="pf-pricing-cell">Blank Price</div>
                                    <div class="pf-pricing-cell">$3.50</div>
                                    <div class="pf-pricing-cell">$2.85</div>
                                    <div class="pf-pricing-cell">$2.50</div>
                                    <div class="pf-pricing-cell">$2.30</div>
                                    <div class="pf-pricing-cell">$2.10</div>
                                    <div class="pf-pricing-cell">$2.00</div>
                                    <div class="pf-pricing-cell">R</div>
                                </div>
                            </div> -->

                            <div class="na-pricing-section">
                                <div class="na-pricing-header">
                                    <i class="fas fa-square"></i> BLANK - Pricing
                                </div>
                                <table class="na-pricing-table">
                                    <thead>
                                        <tr>
                                            <th>Quantity</th>
                                            <th>72</th>
                                            <th>288</th>
                                            <th>500</th>
                                            <th>1000</th>
                                            <th>2000</th>
                                            <th>3000</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Natural</td>
                                            <td>$4.02</td>
                                            <td>$3.27</td>
                                            <td>$2.94</td>
                                            <td>$2.77</td>
                                            <td>$2.58</td>
                                            <td>$2.48</td>
                                        </tr>
                                        <tr>
                                            <td>Colors</td>
                                            <td>$5.00</td>
                                            <td>$4.23</td>
                                            <td>$3.90</td>
                                            <td>$3.73</td>
                                            <td>$3.54</td>
                                            <td>$3.44</td>
                                        </tr>
                                        <tr>
                                            <td>Add Location</td>
                                            <td>$1.81</td>
                                            <td>$1.31</td>
                                            <td>$1.06</td>
                                            <td>$0.94</td>
                                            <td>$0.81</td>
                                            <td>$0.71</td>
                                        </tr>
                                        <tr>
                                            <td>Add Color</td>
                                            <td>$0.50</td>
                                            <td>$0.38</td>
                                            <td>$0.35</td>
                                            <td>$0.30</td>
                                            <td>$0.25</td>
                                            <td>$0.20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Colors Section -->
                <div class="pf-colors-section">
                    <h3 class="pf-colors-title"><i class="fas fa-palette"></i> Available Colors:</h3>
                    <div class="pf-color-grid">
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #556B2F;"></div>
                            <div class="pf-color-name">Army</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FF69B4;"></div>
                            <div class="pf-color-name">Azalea</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #000000;"></div>
                            <div class="pf-color-name">Black</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #56A0D3;"></div>
                            <div class="pf-color-name">Carolina Blue</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #7B3F00;"></div>
                            <div class="pf-color-name">Chocolate</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #3C3C3C;"></div>
                            <div class="pf-color-name">Dark Grey</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #228B22;"></div>
                            <div class="pf-color-name">Forest Green</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FFD700;"></div>
                            <div class="pf-color-name">Gold</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FF1493;"></div>
                            <div class="pf-color-name">Hot Pink</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #4CBB17;"></div>
                            <div class="pf-color-name">Kelly</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #E6E6FA;"></div>
                            <div class="pf-color-name">Lavender</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #D3D3D3;"></div>
                            <div class="pf-color-name">Light Grey</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FFB6C1;"></div>
                            <div class="pf-color-name">Light Pink</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #32CD32;"></div>
                            <div class="pf-color-name">Lime</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #800000;"></div>
                            <div class="pf-color-name">Maroon</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #F5DEB3;"></div>
                            <div class="pf-color-name">Natural</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #000080;"></div>
                            <div class="pf-color-name">Navy</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FF8C00;"></div>
                            <div class="pf-color-name">Orange</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #800080;"></div>
                            <div class="pf-color-name">Purple</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FF0000;"></div>
                            <div class="pf-color-name">Red</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #4169E1;"></div>
                            <div class="pf-color-name">Royal</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #0F52BA;"></div>
                            <div class="pf-color-name">Sapphire</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FF8300;"></div>
                            <div class="pf-color-name">Texas Orange</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #40E0D0;"></div>
                            <div class="pf-color-name">Turquoise</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FFFFFF; border: 2px solid #ddd;"></div>
                            <div class="pf-color-name">White</div>
                        </div>
                        <div class="pf-color-item">
                            <div class="pf-color-swatch" style="background: #FFFF00;"></div>
                            <div class="pf-color-name">Yellow</div>
                        </div>
                    </div>
                </div>

                <!-- Tabs Section -->
                <div class="pf-tabs-section">
                    <div class="pf-tab-buttons">
                        <button class="pf-info-tab-btn pf-active" onclick="pfSwitchInfoTab(this, 'additionalInfo')">
                            <i class="fas fa-info-circle"></i> Additional Information
                        </button>
                        <!-- <button class="pf-info-tab-btn" onclick="pfSwitchInfoTab(this, 'additionalCharges')">
                            <i class="fas fa-dollar-sign"></i> Additional Charges
                        </button> -->
                        <button class="pf-info-tab-btn" onclick="pfSwitchInfoTab(this, 'shippingInfo')">
                            <i class="fas fa-shipping-fast"></i> Shipping Info
                        </button>
                    </div>

                    <div class="pf-tab-content">
                        <div id="pfAdditionalInfo" class="pf-tab-pane pf-active">
                            <table class="pf-info-table">
                                <tr>
                                    <td>Item No.</td>
                                    <td>MQTB</td>
                                </tr>
                                <tr>
                                    <td>Item Name</td>
                                    <td>Cotton Tote Bag</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>6oz Cotton Bag. 100% Cotton Canvas Tote self-fabric handles. Range of colors Reinforced at stress points.</td>
                                </tr>
                                <tr>
                                    <td>Available Colors</td>
                                    <td>Army, Azalea, Black, Carolina Blue, Dark Grey, Forest Green, Gold, Light Grey, Hot Pink, Kelly Green, Lavender, Light Pink, Lime, Maroon, Natural, Navy, Orange, Purple, Red, Royal, Sapphire, Texas Orange, Turquoise, White, Yellow, Chocolate</td>
                                </tr>
                                <tr>
                                    <td>Product Size</td>
                                    <td>15"W x 16"H</td>
                                </tr>
                                <tr>
                                    <td>Imprint Area</td>
                                    <td>10"W x 12"H</td>
                                </tr>
                                <tr>
                                    <td>Quality / Material</td>
                                    <td>100% Cotton Canvas</td>
                                </tr>
                                <tr>
                                    <td>Quality Weight</td>
                                    <td>6oz</td>
                                </tr>
                                <tr>
                                    <td>Handle Length</td>
                                    <td>22"</td>
                                </tr>
                                <tr>
                                    <td>Side Gussets</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>Bottom Gussets</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>Rush Available</td>
                                    <td>Yes, Pls contact customer service</td>
                                </tr>
                                <tr>
                                    <td>Available Decoration</td>
                                    <td>Spot Colors, 4 Color Process, Heat Transfers</td>
                                </tr>
                            </table>
                        </div>

                        <div id="pfAdditionalCharges" class="pf-tab-pane">
                            <table class="pf-info-table">
                                <tr>
                                    <td>Setup Charge</td>
                                    <td>$ 56.25 (V) - One-time setup fee for artwork preparation</td>
                                </tr>
                                <tr>
                                    <td>Repeat Setup</td>
                                    <td>$ 25.00 (V) - Fee for reusing existing setup on new orders</td>
                                </tr>
                                <tr>
                                    <td>Flash Charge</td>
                                    <td>$ 0.31 (V) - Per unit charge when white imprint on Natural color</td>
                                </tr>
                                <tr>
                                    <td>PMS Match</td>
                                    <td>$ 25.00 (V) - Exact Pantone color matching fee</td>
                                </tr>
                                <tr>
                                    <td>Less Than Minimum</td>
                                    <td>$ 50.00 (V) - Fee for orders below minimum quantity</td>
                                </tr>
                                <tr>
                                    <td>Color Change Fee</td>
                                    <td>$ 18.75 (V) - Per color change within same order</td>
                                </tr>
                                <tr>
                                    <td>Add Location</td>
                                    <td>Variable pricing - See pricing table for additional imprint locations</td>
                                </tr>
                                <tr>
                                    <td>Add Color</td>
                                    <td>Variable pricing - See pricing table for additional imprint colors</td>
                                </tr>
                                <tr>
                                    <td>Spec Sample / Pre Pro</td>
                                    <td>Contact for pricing - Physical sample before production</td>
                                </tr>
                                <tr>
                                    <td>Freight</td>
                                    <td>Calculated based on quantity, destination, and shipping method</td>
                                </tr>
                            </table>
                        </div>

                        <div id="pfShippingInfo" class="pf-tab-pane">
                            <table class="pf-info-table">
                                <tr>
                                    <td>Standard Lead Time</td>
                                    <td>5-7 Business Days after artwork approval</td>
                                </tr>
                                <tr>
                                    <td>Rush Service</td>
                                    <td>Available - Please contact customer service for rush options and pricing</td>
                                </tr>
                                <tr>
                                    <td>Shipping Methods</td>
                                    <td>Ground, 2nd Day Air, Next Day Air, Freight for large orders</td>
                                </tr>
                                <tr>
                                    <td>Packaging</td>
                                    <td>Standard bulk packaging. Individual poly bags available upon request</td>
                                </tr>
                                <tr>
                                    <td>Weight per Unit</td>
                                    <td>Approximately 0.3 lbs</td>
                                </tr>
                                <tr>
                                    <td>Carton Dimensions</td>
                                    <td>24" x 18" x 12" (approx. 100 units per carton)</td>
                                </tr>
                                <tr>
                                    <td>International Shipping</td>
                                    <td>Available - Contact for international shipping quotes and lead times</td>
                                </tr>
                                <tr>
                                    <td>Freight Quote</td>
                                    <td>Use the Freight Quote button to get shipping estimates</td>
                                </tr>
                                <tr>
                                    <td>Delivery Address</td>
                                    <td>Residential and commercial addresses accepted. Loading dock availability may affect freight charges</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Freight Quote Modal -->
        <div id="pfFreightModal" class="pf-modal">
            <div class="pf-modal-content">
                <div class="pf-modal-header">
                    <h2 class="pf-modal-title"><i class="fas fa-truck"></i> Freight Quote - Cotton Tote Bag MQTB</h2>
                    <button class="pf-modal-close" onclick="pfCloseModal('freightModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="pf-modal-body">
                    <p style="margin-bottom: 20px; color: var(--secondary-color);">
                        <i class="fas fa-info-circle"></i> Please verify quote before placing order.
                    </p>
                    <form>
                        <div class="pf-form-group">
                            <label class="pf-form-label">Quantity: *</label>
                            <input type="number" class="pf-form-control" placeholder="Enter quantity" required>
                        </div>
                        <div class="pf-form-group">
                            <label class="pf-form-label">Zip Code: *</label>
                            <input type="text" class="pf-form-control" placeholder="Enter destination zip code" required>
                        </div>
                        <button type="submit" class="pf-submit-btn">
                            <i class="fas fa-calculator"></i> Calculate Freight
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Quote Modal -->
        <div id="pfQuoteModal" class="pf-modal">
            <div class="pf-modal-content">
                <div class="pf-modal-header">
                    <h2 class="pf-modal-title"><i class="fas fa-file-invoice-dollar"></i> Request Quote - Cotton Tote Bag</h2>
                    <button class="pf-modal-close" onclick="pfCloseModal('quoteModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="pf-modal-body">
                    <form>
                        <div class="pf-form-group">
                            <label class="pf-form-label">Product:</label>
                            <input type="text" class="pf-form-control" value="Cotton Tote Bag 15&quot;W x 16&quot;H MQTB" readonly>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Select Color: *</label>
                            <div class="pf-color-selector">
                                <div class="pf-color-option" style="background: #556B2F;" title="Army"></div>
                                <div class="pf-color-option" style="background: #FF69B4;" title="Azalea"></div>
                                <div class="pf-color-option" style="background: #000000;" title="Black"></div>
                                <div class="pf-color-option" style="background: #56A0D3;" title="Carolina Blue"></div>
                                <div class="pf-color-option" style="background: #7B3F00;" title="Chocolate"></div>
                                <div class="pf-color-option" style="background: #3C3C3C;" title="Dark Grey"></div>
                                <div class="pf-color-option" style="background: #228B22;" title="Forest Green"></div>
                                <div class="pf-color-option" style="background: #FFD700;" title="Gold"></div>
                                <div class="pf-color-option" style="background: #FF1493;" title="Hot Pink"></div>
                                <div class="pf-color-option" style="background: #4CBB17;" title="Kelly"></div>
                                <div class="pf-color-option" style="background: #E6E6FA;" title="Lavender"></div>
                                <div class="pf-color-option" style="background: #D3D3D3;" title="Light Grey"></div>
                                <div class="pf-color-option" style="background: #FFB6C1;" title="Light Pink"></div>
                                <div class="pf-color-option" style="background: #32CD32;" title="Lime"></div>
                                <div class="pf-color-option" style="background: #800000;" title="Maroon"></div>
                                <div class="pf-color-option" style="background: #F5DEB3;" title="Natural"></div>
                                <div class="pf-color-option" style="background: #000080;" title="Navy"></div>
                                <div class="pf-color-option" style="background: #FF8C00;" title="Orange"></div>
                                <div class="pf-color-option" style="background: #800080;" title="Purple"></div>
                                <div class="pf-color-option" style="background: #FF0000;" title="Red"></div>
                                <div class="pf-color-option" style="background: #4169E1;" title="Royal"></div>
                                <div class="pf-color-option" style="background: #0F52BA;" title="Sapphire"></div>
                                <div class="pf-color-option" style="background: #FF8300;" title="Texas Orange"></div>
                                <div class="pf-color-option" style="background: #40E0D0;" title="Turquoise"></div>
                                <div class="pf-color-option" style="background: #FFFFFF; border: 2px solid #ddd;" title="White"></div>
                                <div class="pf-color-option" style="background: #FFFF00;" title="Yellow"></div>
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Decorated/Embellished: *</label>
                            <div class="pf-radio-group">
                                <label class="pf-radio-label">
                                    <input type="radio" name="decorated" value="blank" checked>
                                    <span>Blank</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="decorated" value="decorated">
                                    <span>Decorated/Embellished</span>
                                </label>
                            </div>
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Quantity: *</label>
                                <input type="number" class="pf-form-control" placeholder="Enter quantity" required>
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">Ship To Zip Code: *</label>
                                <input type="text" class="pf-form-control" placeholder="Enter zip code" required>
                            </div>
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Company Name:</label>
                                <input type="text" class="pf-form-control" placeholder="Enter company name">
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">Email: *</label>
                                <input type="email" class="pf-form-control" placeholder="Enter email" required>
                            </div>
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Phone: *</label>
                                <input type="tel" class="pf-form-control" placeholder="Enter phone number" required>
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">ASI / PPAI / SAGE #:</label>
                                <input type="text" class="pf-form-control" placeholder="Enter membership number">
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">In Hand Date:</label>
                            <input type="date" class="pf-form-control">
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Need Freight Estimate?</label>
                            <div class="pf-radio-group">
                                <label class="pf-radio-label">
                                    <input type="radio" name="freight" value="yes" checked>
                                    <span>Yes</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="freight" value="no">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Loading Dock at receiving End?</label>
                            <div class="pf-radio-group">
                                <label class="pf-radio-label">
                                    <input type="radio" name="dock" value="yes">
                                    <span>Yes</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="dock" value="no" checked>
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Project Details:</label>
                            <textarea class="pf-form-control" rows="4" placeholder="Please provide details related to this project..."></textarea>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Attach Artwork/Reference:</label>
                            <input type="file" class="pf-form-control" multiple>
                        </div>

                        <button type="submit" class="pf-submit-btn">
                            <i class="fas fa-paper-plane"></i> Submit Quote Request
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sample Modal -->
        <div id="pfSampleModal" class="pf-modal">
            <div class="pf-modal-content" style="max-width: 1000px;">
                <div class="pf-modal-header">
                    <h2 class="pf-modal-title"><i class="fas fa-cube"></i> Order Sample - MQTB</h2>
                    <button class="pf-modal-close" onclick="pfCloseModal('sampleModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="pf-modal-body">
                    <form>
                        <div class="pf-form-group">
                            <label class="pf-form-label">Item No: MQTB</label>
                            <input type="text" class="pf-form-control" value="Cotton Tote Bag 15&quot;W x 16&quot;H" readonly>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Select Color: *</label>
                            <select class="pf-form-select" required>
                                <option value="">-- Select Color --</option>
                                <option>Army</option>
                                <option>Azalea</option>
                                <option>Black</option>
                                <option>Carolina Blue</option>
                                <option>Chocolate</option>
                                <option>Dark Grey</option>
                                <option>Forest Green</option>
                                <option>Gold</option>
                                <option>Hot Pink</option>
                                <option>Kelly</option>
                                <option>Lavender</option>
                                <option>Light Grey</option>
                                <option>Light Pink</option>
                                <option>Lime</option>
                                <option>Maroon</option>
                                <option>Natural</option>
                                <option>Navy</option>
                                <option>Orange</option>
                                <option>Purple</option>
                                <option>Red</option>
                                <option>Royal</option>
                                <option>Sapphire</option>
                                <option>Texas Orange</option>
                                <option>Turquoise</option>
                                <option>White</option>
                                <option>Yellow</option>
                            </select>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Preference: *</label>
                            <div class="pf-radio-group">
                                <label class="pf-radio-label">
                                    <input type="radio" name="preference" value="blank-preferred" checked>
                                    <span>Blank – Preferred</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="preference" value="blank-only">
                                    <span>Blank Only</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="preference" value="printed-preferred">
                                    <span>Printed – Preferred</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="preference" value="printed-only">
                                    <span>Printed – Only</span>
                                </label>
                            </div>
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">QTY: *</label>
                                <input type="number" class="pf-form-control" placeholder="Quantity" required value="1">
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">Email: *</label>
                                <input type="email" class="pf-form-control" placeholder="Enter email" required>
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Do you want Catalog?</label>
                            <div class="pf-radio-group">
                                <label class="pf-radio-label">
                                    <input type="radio" name="catalog" value="yes">
                                    <span>Yes</span>
                                </label>
                                <label class="pf-radio-label">
                                    <input type="radio" name="catalog" value="no" checked>
                                    <span>No</span>
                                </label>
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">How many catalogs?</label>
                            <input type="number" class="pf-form-control" placeholder="Enter quantity">
                        </div>

                        <h3 style="margin: 30px 0 20px; color: var(--dark-color); font-family: var(--title-fonts);">
                            <i class="fas fa-building"></i> Billing Address
                        </h3>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Company Name: *</label>
                            <input type="text" class="pf-form-control" placeholder="Enter company name" required>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Address: *</label>
                            <input type="text" class="pf-form-control" placeholder="Street address" required>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Address 2:</label>
                            <input type="text" class="pf-form-control" placeholder="Apt, suite, unit, etc.">
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Country: *</label>
                                <select class="pf-form-select" required>
                                    <option value="">--Please Select--</option>
                                    <option>USA</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">State: *</label>
                                <select class="pf-form-select" required>
                                    <option value="">--Please Select--</option>
                                    <option>Alabama (AL)</option>
                                    <option>Alaska (AK)</option>
                                    <option>Arizona (AZ)</option>
                                    <option>Arkansas (AR)</option>
                                    <option>California (CA)</option>
                                    <option>Colorado (CO)</option>
                                    <option>Connecticut (CT)</option>
                                    <option>Delaware (DE)</option>
                                    <option>Florida (FL)</option>
                                    <option>Georgia (GA)</option>
                                    <option>Hawaii (HI)</option>
                                    <option>Idaho (ID)</option>
                                    <option>Illinois (IL)</option>
                                    <option>Indiana (IN)</option>
                                    <option>Iowa (IA)</option>
                                    <option>Kansas (KS)</option>
                                    <option>Kentucky (KY)</option>
                                    <option>Louisiana (LA)</option>
                                    <option>Maine (ME)</option>
                                    <option>Maryland (MD)</option>
                                    <option>Massachusetts (MA)</option>
                                    <option>Michigan (MI)</option>
                                    <option>Minnesota (MN)</option>
                                    <option>Mississippi (MS)</option>
                                    <option>Missouri (MO)</option>
                                    <option>Montana (MT)</option>
                                    <option>Nebraska (NE)</option>
                                    <option>Nevada (NV)</option>
                                    <option>New Hampshire (NH)</option>
                                    <option>New Jersey (NJ)</option>
                                    <option>New Mexico (NM)</option>
                                    <option>New York (NY)</option>
                                    <option>North Carolina (NC)</option>
                                    <option>North Dakota (ND)</option>
                                    <option>Ohio (OH)</option>
                                    <option>Oklahoma (OK)</option>
                                    <option>Oregon (OR)</option>
                                    <option>Pennsylvania (PA)</option>
                                    <option>Rhode Island (RI)</option>
                                    <option>South Carolina (SC)</option>
                                    <option>South Dakota (SD)</option>
                                    <option>Tennessee (TN)</option>
                                    <option>Texas (TX)</option>
                                    <option>Utah (UT)</option>
                                    <option>Vermont (VT)</option>
                                    <option>Virginia (VA)</option>
                                    <option>Washington (WA)</option>
                                    <option>West Virginia (WV)</option>
                                    <option>Wisconsin (WI)</option>
                                    <option>Wyoming (WY)</option>
                                    <option>Washington (DC)</option>
                                </select>
                            </div>
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">City: *</label>
                                <input type="text" class="pf-form-control" placeholder="City" required>
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">Zip: *</label>
                                <input type="text" class="pf-form-control" placeholder="Zip code" required>
                            </div>
                        </div>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Phone: *</label>
                                <input type="tel" class="pf-form-control" placeholder="Phone number" required>
                            </div>
                            <div class="pf-form-group">
                                <label class="pf-form-label">Fax:</label>
                                <input type="tel" class="pf-form-control" placeholder="Fax number">
                            </div>
                        </div>

                        <h3 style="margin: 30px 0 20px; color: var(--dark-color); font-family: var(--title-fonts);">
                            <i class="fas fa-shipping-fast"></i> Shipping Address
                        </h3>

                        <div class="pf-form-group">
                            <label class="pf-checkbox-label">
                                <input type="checkbox" onchange="pfCopyBillingAddress(this)">
                                <span>Same as Billing Address</span>
                            </label>
                        </div>

                        <div id="pfShippingAddress">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Company Name: *</label>
                                <input type="text" class="pf-form-control" placeholder="Enter company name">
                            </div>

                            <div class="pf-form-group">
                                <label class="pf-form-label">Address: *</label>
                                <input type="text" class="pf-form-control" placeholder="Street address">
                            </div>

                            <div class="pf-form-group">
                                <label class="pf-form-label">Address 2:</label>
                                <input type="text" class="pf-form-control" placeholder="Apt, suite, unit, etc.">
                            </div>

                            <div class="pf-form-row">
                                <div class="pf-form-group">
                                    <label class="pf-form-label">Country: *</label>
                                    <select class="pf-form-select">
                                        <option value="">--Please Select--</option>
                                        <option>USA</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="pf-form-group">
                                    <label class="pf-form-label">State: *</label>
                                    <select class="pf-form-select">
                                        <option value="">--Please Select--</option>
                                        <option>Alabama (AL)</option>
                                        <option>Alaska (AK)</option>
                                        <option>Arizona (AZ)</option>
                                        <option>Arkansas (AR)</option>
                                        <option>California (CA)</option>
                                        <option>Colorado (CO)</option>
                                        <option>Connecticut (CT)</option>
                                        <option>Delaware (DE)</option>
                                        <option>Florida (FL)</option>
                                        <option>Georgia (GA)</option>
                                        <option>Hawaii (HI)</option>
                                        <option>Idaho (ID)</option>
                                        <option>Illinois (IL)</option>
                                        <option>Indiana (IN)</option>
                                        <option>Iowa (IA)</option>
                                        <option>Kansas (KS)</option>
                                        <option>Kentucky (KY)</option>
                                        <option>Louisiana (LA)</option>
                                        <option>Maine (ME)</option>
                                        <option>Maryland (MD)</option>
                                        <option>Massachusetts (MA)</option>
                                        <option>Michigan (MI)</option>
                                        <option>Minnesota (MN)</option>
                                        <option>Mississippi (MS)</option>
                                        <option>Missouri (MO)</option>
                                        <option>Montana (MT)</option>
                                        <option>Nebraska (NE)</option>
                                        <option>Nevada (NV)</option>
                                        <option>New Hampshire (NH)</option>
                                        <option>New Jersey (NJ)</option>
                                        <option>New Mexico (NM)</option>
                                        <option>New York (NY)</option>
                                        <option>North Carolina (NC)</option>
                                        <option>North Dakota (ND)</option>
                                        <option>Ohio (OH)</option>
                                        <option>Oklahoma (OK)</option>
                                        <option>Oregon (OR)</option>
                                        <option>Pennsylvania (PA)</option>
                                        <option>Rhode Island (RI)</option>
                                        <option>South Carolina (SC)</option>
                                        <option>South Dakota (SD)</option>
                                        <option>Tennessee (TN)</option>
                                        <option>Texas (TX)</option>
                                        <option>Utah (UT)</option>
                                        <option>Vermont (VT)</option>
                                        <option>Virginia (VA)</option>
                                        <option>Washington (WA)</option>
                                        <option>West Virginia (WV)</option>
                                        <option>Wisconsin (WI)</option>
                                        <option>Wyoming (WY)</option>
                                        <option>Washington (DC)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="pf-form-row">
                                <div class="pf-form-group">
                                    <label class="pf-form-label">City: *</label>
                                    <input type="text" class="pf-form-control" placeholder="City">
                                </div>
                                <div class="pf-form-group">
                                    <label class="pf-form-label">Zip: *</label>
                                    <input type="text" class="pf-form-control" placeholder="Zip code">
                                </div>
                            </div>

                            <div class="pf-form-row">
                                <div class="pf-form-group">
                                    <label class="pf-form-label">Phone: *</label>
                                    <input type="tel" class="pf-form-control" placeholder="Phone number">
                                </div>
                                <div class="pf-form-group">
                                    <label class="pf-form-label">Fax:</label>
                                    <input type="tel" class="pf-form-control" placeholder="Fax number">
                                </div>
                            </div>
                        </div>

                        <h3 style="margin: 30px 0 20px; color: var(--dark-color); font-family: var(--title-fonts);">
                            <i class="fas fa-truck"></i> Shipping Details
                        </h3>

                        <div class="pf-form-row">
                            <div class="pf-form-group">
                                <label class="pf-form-label">Shipping Carrier: *</label>
                                <div class="pf-radio-group">
                                    <label class="pf-radio-label">
                                        <input type="radio" name="carrier" value="ups" checked>
                                        <span>UPS</span>
                                    </label>
                                    <label class="pf-radio-label">
                                        <input type="radio" name="carrier" value="fedex">
                                        <span>FedEx</span>
                                    </label>
                                    <label class="pf-radio-label">
                                        <input type="radio" name="carrier" value="dhl">
                                        <span>DHL</span>
                                    </label>
                                    <label class="pf-radio-label">
                                        <input type="radio" name="carrier" value="usmail">
                                        <span>US Mail</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Shipping Method: *</label>
                            <select class="pf-form-select" required>
                                <option value="">--Select Method--</option>
                                <option>Ground</option>
                                <option>2nd Day Air</option>
                                <option>2nd Day Air (AM)</option>
                                <option>3rd Day</option>
                                <option>Next Day Saver</option>
                                <option>Next Day Air</option>
                                <option>Next Day (AM)</option>
                            </select>
                        </div>

                        <div class="pf-form-group">
                            <label class="pf-form-label">Carrier A/c No:</label>
                            <input type="text" class="pf-form-control" placeholder="Enter carrier account number">
                        </div>

                        <button type="submit" class="pf-submit-btn">
                            <i class="fas fa-shopping-cart"></i> Order Sample
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Images Modal -->
        <div id="pfImagesModal" class="pf-modal">
            <div class="pf-modal-content">
                <div class="pf-modal-header">
                    <h2 class="pf-modal-title"><i class="fas fa-images"></i> Product Images</h2>
                    <button class="pf-modal-close" onclick="pfCloseModal('imagesModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="pf-modal-body">
                    <div class="pf-image-grid">
                        <div class="pf-image-download-item">
                            <div class="pf-download-icon">
                                <!-- <i class="fas fa-file-image"></i> -->
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_795622.jpg" alt="">
                            </div>
                            <p style="margin: 10px 0; font-weight: 600;">Maroon Bag</p>
                            <button class="pf-download-btn" onclick="pfDownloadImage('maroon')">
                                <i class="fas fa-download"></i> Download
                            </button>
                        </div>
                        <div class="pf-image-download-item">
                            <div class="pf-download-icon">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_333522.jpg" alt="">
                            </div>
                            <p style="margin: 10px 0; font-weight: 600;">Black Bag</p>
                            <button class="pf-download-btn" onclick="pfDownloadImage('black')">
                                <i class="fas fa-download"></i> Download
                            </button>
                        </div>
                        <div class="pf-image-download-item">
                            <div class="pf-download-icon">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_459222.jpg" alt="">
                            </div>
                            <p style="margin: 10px 0; font-weight: 600;">Blue Bag</p>
                            <button class="pf-download-btn" onclick="pfDownloadImage('blue')">
                                <i class="fas fa-download"></i> Download
                            </button>
                        </div>
                        <div class="pf-image-download-item">
                            <div class="pf-download-icon">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_361322.jpg" alt="">
                            </div>
                            <p style="margin: 10px 0; font-weight: 600;">Red Bag</p>
                            <button class="pf-download-btn" onclick="pfDownloadImage('red')">
                                <i class="fas fa-download"></i> Download
                            </button>
                        </div>
                        <div class="pf-image-download-item">
                            <div class="pf-download-icon">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_96522.jpg" alt="">
                            </div>
                            <p style="margin: 10px 0; font-weight: 600;">Natural Bag</p>
                            <button class="pf-download-btn" onclick="pfDownloadImage('natural')">
                                <i class="fas fa-download"></i> Download
                            </button>
                        </div>
                        <div class="pf-image-download-item">
                            <div class="pf-download-icon">
                                <img src="https://www.metro-textile.com/ExtraImages/zoom_400622.jpg" alt="">
                            </div>
                            <p style="margin: 10px 0; font-weight: 600;">All Colors</p>
                            <button class="pf-download-btn" onclick="pfDownloadImage('all')">
                                <i class="fas fa-download"></i> Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template Modal -->
        <div id="pfTemplateModal" class="pf-modal">
            <div class="pf-modal-content">
                <div class="pf-modal-header">
                    <h2 class="pf-modal-title"><i class="fas fa-file-download"></i> Download Templates</h2>
                    <button class="pf-modal-close" onclick="pfCloseModal('templateModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="pf-modal-body">
                    <p style="margin-bottom: 30px; color: var(--secondary-color); text-align: center; font-size: 1.1em;">
                        <i class="fas fa-info-circle"></i> Click on Swatch to download a single Template
                    </p>

                    <div class="pf-template-options">
                        <div class="pf-template-card" onclick="pfDownloadTemplate('color')">
                            <div class="pf-template-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <div class="pf-template-title">Color Swatch</div>
                            <p style="color: var(--secondary-color); margin-bottom: 15px;">Full color template with design guides</p>
                            <button class="pf-download-btn">
                                <i class="fas fa-download"></i> Download Color
                            </button>
                        </div>

                        <div class="pf-template-card" onclick="pfDownloadTemplate('bw')">
                            <div class="pf-template-icon">
                                <i class="fas fa-adjust"></i>
                            </div>
                            <div class="pf-template-title">Black & White</div>
                            <p style="color: var(--secondary-color); margin-bottom: 15px;">Grayscale template for printing</p>
                            <button class="pf-download-btn">
                                <i class="fas fa-download"></i> Download B&W
                            </button>
                        </div>
                    </div>

                    <button class="pf-download-all-btn" onclick="pfDownloadAllTemplates()">
                        <i class="fas fa-download"></i> Click here to download all at once
                    </button>
                </div>
            </div>
        </div>
    </section>



    <section class="pd-product-section">
      <!-- Section Header -->

      <!-- Product Categories Section -->
      <div class="pd-categories-section">
        <h3 class="pd-categories-title animate__animated animate__fadeInUp">
          Explore Our Product Categories
        </h3>
        <div class="pd-categories-grid">
          <a href="{{ route('products') }}" class="pd-category-card animate__animated animate__fadeInUp" style="animation-delay: 0.1s; text-decoration: none;">
            <i class="fas fa-shopping-bag pd-category-icon"></i>
            <h4 class="pd-category-name">Bags</h4>
            <p class="pd-category-count">52 Products</p>
          </a>
          <a href="{{ route('products') }}" class="pd-category-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s; text-decoration: none;">
            <i class="fas fa-utensils pd-category-icon"></i>
            <h4 class="pd-category-name">Aprons</h4>
            <p class="pd-category-count">38 Products</p>
          </a>
          <a href="{{ route('products') }}" class="pd-category-card animate__animated animate__fadeInUp" style="animation-delay: 0.3s; text-decoration: none;">
            <i class="fas fa-user-md pd-category-icon"></i>
            <h4 class="pd-category-name">Scrubs</h4>
            <p class="pd-category-count">64 Products</p>
          </a>
          <a href="{{ route('products') }}" class="pd-category-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s; text-decoration: none;">
            <i class="fas fa-home pd-category-icon"></i>
            <h4 class="pd-category-name">Home Textile</h4>
            <p class="pd-category-count">89 Products</p>
          </a>
          <a href="{{ route('products') }}" class="pd-category-card animate__animated animate__fadeInUp" style="animation-delay: 0.5s; text-decoration: none;">
            <i class="fas fa-hard-hat pd-category-icon"></i>
            <h4 class="pd-category-name">Uniform & Workwear</h4>
            <p class="pd-category-count">76 Products</p>
          </a>
          <a href="{{ route('products') }}" class="pd-category-card animate__animated animate__fadeInUp" style="animation-delay: 0.6s; text-decoration: none;">
            <i class="fas fa-bandage pd-category-icon"></i>
            <h4 class="pd-category-name">Bandanas</h4>
            <p class="pd-category-count">31 Products</p>
          </a>
        </div>
      </div>
    </section>




            @endsection

@section('script')
@endsection
