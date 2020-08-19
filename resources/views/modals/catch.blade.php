<div class="modal fade" id="catch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body" style="padding: 40px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="font-weight-bold h5 pb-4 text-center" style="color: #007bff;">Для получения большей информации, свяжитесь с нами и мы ответим вам в течении 15 минут.</p>
                <div class="form-label-group">
                    <label for="inputName">Имя</label>
                    <input type="text" id="name" class="form-control" placeholder="Введите имя" required="" autofocus="">
                </div>
                <div class="form-label-group pt-4">
                    <label for="telephone">Номер телефона</label>
                    <input type="text" id="phone" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43' placeholder="Введите номер телефона" required="" autofocus="">
                </div>

                <div class="custom-control custom-checkbox pt-3">
                    <input type="checkbox" class="custom-control-input font-small" id="myCheck2" checked onclick="myFunction()">
                    <label class="custom-control-label small" style="line-height: 120%" for="myCheck2">Нажимая на кнопку "отправить" вы соглашаетесь с <a href="{{ route('terms_of_use') }}" target="_blank">пользовательским соглашением</a></label>
                </div>
                <div class="pt-4 text-center">
                    <button type="button" id="accept2" class="btn-modal btn">Отправить</button>
                </div>
                {{--<div class="pt-2 text-center">--}}
                {{--<button id="accept" type="button" class="btn btn-success" style="display:none">Принимаю</button>--}}
                {{--<button id="reject" type="button" class="btn btn-danger" style="display:none">Не принимаю</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>