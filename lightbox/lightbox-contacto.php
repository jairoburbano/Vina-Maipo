<div class="lightbox light-contact">
    <h2>Contáctanos</h2>
    <div class="close-contact icon-close js-lightbox-close">
        <svg><use xlink:href="#shape-icon-close" /></svg>
    </div>
    <div class="content" id="form">
        <form action="{{site.theme.link}}/lib/mail/index.php" class="formulario form-contact" id="contactForm">
            <div class="left-box">
                <div class="input-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="types-input">
                </div>
                <div class="input-group">
                    <label for="surname">Apellidos</label>
                    <input type="text" name="surname" id="surname" class="types-input">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="types-input">
                </div>
            </div>
            <div class="right-box">
                <div class="input-group">
                    <label>Selecciona tu país</label>
                    <div class="js-form-select form__select">
                        <div class="form__select--fake">
                            <span class="js-form-select-text">País</span>
                            <div class="form__select--fake__icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 19.4 11.1" enable-background="new 0 0 19.4 11.1" xml:space="preserve"><polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="18.7,0.7 9.7,9.7 0.7,0.7 "/></svg></div>
                        </div>
                        <select name="selectpais" id="selectpais" class="form__select--real">
                            <option value="">País</option>
                            <option value="Chile">Chile</option>
                        </select>
                    </div>
                    <input type="hidden" name="pais" id="pais">
                </div>
                <div class="input-group">
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" class="types-input"></textarea>
                </div>
                <div class="input-group send">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
</div>