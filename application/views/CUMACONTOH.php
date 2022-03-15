<!-- Kamar Standard -->
                <div class="col-sm-6">
                  <div class="card shadow-sm">
                    <?php echo->$value->gambar; ?>
                    <div class="card-body">
                      <h2 class="card-text"><?php echo $value->nama_kamar_tipe; ?></h2>
                      <p><?php echo $value->fasilitas; ?></p>
                      <p><?php echo $value->harga; ?></p>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#kamar1">Pesan</button>

                      <div class="modal fade" id="kamar1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Kamar Standard</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <img src="<?php base_url() ?>assets/img/kamar-1.jpg" class="mb-3" alt="">
                              <h5>Fasilitas</h5>
                              <ul>
                                <li>Televisi</li>
                                <li>AC</li>
                                <li>Kamar Mandi</li>
                                <li>Kopi</li>
                                <li>Air Mineral</li>
                              </ul>
                              <form action="">
                                <div class="mb-3">
                                  <label for="jumlah_kamar" class="form-label"><i class="bi bi-plus-circle-fill me-2"></i>Jumlah Kamar yang ingin anda pesan</label>
                                  <input type="text" class="form-control" id="jumlah_kamar" placeholder="Jumlah Kamar">
                                </div>
                                <div class="mb-3">
                                  <label for="durasi" class="form-label"><i class="bi bi-moon-stars-fill me-2"></i>Durasi</label>
                                  <select class="form-select" name="durasi" id="durasi">
                                    <option value="1 Malam">1 Malam</option>
                                    <option value="2 Malam">2 Malam</option>
                                    <option value="3 Malam">3 Malam</option>
                                    <option value="4 Malam">4 Malam</option>
                                    <option value="5 Malam">5 Malam</option>
                                    <option value="6 Malam">6 Malam</option>
                                    <option value="7 Malam">7 Malam</option>
                                    <option value="8 Malam">8 Malam</option>
                                    <option value="9 Malam">9 Malam</option>
                                    <option value="10 Malam">10 Malam</option>
                                    <option value="11 Malam">11 Malam</option>
                                    <option value="12 Malam">12 Malam</option>
                                    <option value="13 Malam">13 Malam</option>
                                    <option value="14 Malam">14 Malam</option>
                                    <option value="15 Malam">15 Malam</option>
                                    <option value="16 Malam">16 Malam</option>
                                    <option value="17 Malam">17 Malam</option>
                                    <option value="18 Malam">18 Malam</option>
                                    <option value="19 Malam">19 Malam</option>
                                    <option value="20 Malam">20 Malam</option>
                                    <option value="21 Malam">21 Malam</option>
                                    <option value="22 Malam">22 Malam</option>
                                    <option value="23 Malam">23 Malam</option>
                                    <option value="24 Malam">24 Malam</option>
                                    <option value="25 Malam">25 Malam</option>
                                    <option value="26 Malam">26 Malam</option>
                                    <option value="27 Malam">27 Malam</option>
                                    <option value="28 Malam">28 Malam</option>
                                    <option value="29 Malam">29 Malam</option>
                                    <option value="30 Malam">30 Malam</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="check-in" class="form-label"><i class="bi bi-box-arrow-right me-2"></i>Check-in</label>
                                  <input type="date" class="form-control" id="check-in" placeholder="Check-in">
                                </div>
                                <div class="mb-3">
                                  <label for="check-out" class="form-label"><i class="bi bi-box-arrow-left me-2"></i>Check-out</label>
                                  <input type="date" class="form-control" id="check-out" placeholder="Check-out">
                                </div>
                                <button class="btn btn-sm btn-primary">Pesan sekarang</button>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Keluar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>