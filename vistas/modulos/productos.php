<!-- Main content -->
<section class="content">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4 align-items-center">
          <div class="col-sm-6">
            <h1 class="display-4">Reservaciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Reservaciones</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Título Centrado -->
    <div class="text-center my-4">
      <h2 class="fw-bold text-primary">¡Necesito Vacaciones!</h2>
    </div>

    <!-- Reservation Area -->
    <div class="container mb-5">
      <div class="card shadow rounded-4">
        <div class="card-body p-5">
          <h4 class="mb-4 text-center text-secondary">Table Reservation</h4>

          <form id="contact" action="" method="post">
            <div class="row g-3">
              <div class="col-md-6">
                <input name="name" type="text" id="name" class="form-control form-control-lg" placeholder="Tu Nombre*" required>
              </div>
              <div class="col-md-6">
                <input name="email" type="email" id="email" class="form-control form-control-lg" placeholder="Tu Correo Electronico*" required>
              </div>
              <div class="col-md-6">
                <input name="phone" type="tel" id="phone" class="form-control form-control-lg" placeholder="Numero Telefonico*" required>
              </div>
              <div class="col-md-6">
                <select name="number-guests" id="number-guests" class="form-select form-select-lg" required>
                  <option disabled selected>Numero De Invitados</option>
                  ${[...Array(12).keys()].map(i => `<option value="${i+1}">${i+1}</option>`).join('')}
                </select>
              </div>
              <div class="col-md-6">
                <input name="date" id="date" type="text" class="form-control form-control-lg" placeholder="dd/mm/yyyy" required>
              </div>
              <div class="col-md-6">
                <select name="time" id="time" class="form-select form-select-lg" required>
                  <option disabled selected>Motivo</option>
                  <option value="Breakfast">Vacaciones</option>
                  <option value="Lunch">Trabajo</option>
                  <option value="Dinner">Privado</option>
                </select>
              </div>
              <div class="col-12">
                <textarea name="message" rows="5" id="message" class="form-control form-control-lg" placeholder="Mensaje" required></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" id="form-submit" class="btn btn-primary btn-lg rounded-pill px-5 mt-3">
                 Hacer Una Reservacion
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- Optional: If not already included -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
