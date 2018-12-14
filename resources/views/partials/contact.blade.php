<!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->
<section class="message_now_area bg-gray section_padding_100_70" id="contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="contact_address_area">
                    <!-- Section Heading Start -->
                    <div class="section_heading text-left">
                        <h2>Entre em Contato</h2>
                        <p>
                            Envie uma mensagem para nossos consultores.
                        </p>
                    </div>
                    <div class="line"></div>
                    <div class="single_contact_area">
                        <p>
                            Nós nos diferenciamos pelo rápido atendimento. Envie-nos uma mensagem com a sua dúvida ou
                            requisição que lhe responderemos em até 2 horas.
                        </p>

                        <div class="line"></div>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:21-3486-0342">(+55) 21 3486-0342</a>
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:21-98284-1840">(+55) 21 98284-1840</a>
                        </p>
                        <p>
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            <a href="tel:21-96443-1983">(+55) 21 96443-1983 (WhatsApp)</a>
                        </p>

                        <p>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:contato@ficharapidabr.com.br">contato@ficharapidabr.com.br</a>
                        </p>

                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <strong>Matriz:</strong> Rua Bárbara Heliodora, 1637 - Sala 1 - Jardim Sulacap - Rio de Janeiro / RJ
                        </p>

                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <strong>Unidade Recreio:</strong> Estrada Benvindo de Novaes, 927 - Recreio dos Bandeirantes - Rio de Janeiro / RJ
                        </p>
                    </div>
                    <div class="social_links_area">
                        <a href="https://www.facebook.com/ficharapida.br" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <!-- Section Heading Start -->
                <div class="section_heading text-left">
                    <h2>Envie sua mensagem</h2>
                    <p>
                        Preencha todos os campos abaixo para nos enviar um e-mail.
                    </p>
                </div>
                <div class="line"></div>
                <div class="contact_from">
                    <form action="{{route('send_email')}}" class="send-email" method="POST" id="contact-form">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="normal-label" for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Seu nome">
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="normal-label" for="email">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Seu melhor e-mail">
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12 m-t-1">
                                    <div class="form-group">
                                        <label class="normal-label" for="subject">Assunto</label>
                                        <select class="form-control" name="subject" id="subject"
                                                title="Selecione o assunto do seu e-mail">
                                            <option>Pesquisa Simples (mini-ficha)</option>
                                            <option>Pesquisa Completa</option>
                                            <option>Pesquisa Pessoa Jurídica</option>
                                            <option>Pesquisa Funcional (RH)</option>
                                            <option>Serviços de Certidões</option>
                                            <option>Outros serviços creditícios</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12 m-t-1">
                                    <div class="form-group">
                                        <label class="normal-label" for="number">Telefone</label>
                                        <input type="text" class="form-control phone" name="number" id="number"
                                               placeholder="Seu telefone">
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12 m-t-1">
                                    <div class="form-group">
                                        <label class="normal-label" for="message">Mensagem</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                                  placeholder="Escreva o que você deseja nos perguntar"></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <button type="submit" class="btn royal-btn">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->