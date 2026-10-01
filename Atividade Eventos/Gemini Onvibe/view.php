<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONVIBE EVENTOS - Viva Grandes Momentos!</title>

    <!-- Importação do Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Importação da fonte Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Configuração customizada de cores -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        onvibe: {
                            purple: '#8A168F',
                            deep: '#6A0DAD',
                            light: '#f8f0ff',
                            lilac: '#f3e5f8',
                            border: '#e9d5f5',
                            card: '#ffffff'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #f8f0ff;
            color: #2e1038;
            font-family: 'Inter', sans-serif;
        }

        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(138, 22, 143, 0.08), 0 8px 10px -6px rgba(106, 13, 173, 0.05);
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 30px -10px rgba(138, 22, 143, 0.15);
        }

        .btn-shadow {
            box-shadow: 0 8px 20px -4px rgba(138, 22, 143, 0.35);
        }
        .btn-shadow:hover {
            box-shadow: 0 12px 24px -4px rgba(138, 22, 143, 0.45);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col justify-between antialiased text-gray-800">

    <!-- CABEÇALHO -->
    <header class="bg-white border-b border-onvibe-border shadow-sm py-10 px-4 text-center relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-32 bg-gradient-to-b from-onvibe-lilac/50 to-transparent rounded-full blur-2xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto flex flex-col items-center">
            <div class="w-16 h-16 bg-gradient-to-tr from-[#8A168F] to-[#6A0DAD] rounded-2xl flex items-center justify-center mb-4 shadow-md transform hover:rotate-3 transition-transform duration-300">
                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 001 1.732V15a2 2 0 002 2h12a2 2 0 002-2v-3.268A2 2 0 0021 10V7a2 2 0 00-2-2H5z"></path>
                </svg>
            </div>

            <h1 class="text-3xl md:text-5xl font-black tracking-tight text-[#8A168F]">
                ONVIBE EVENTOS
            </h1>

            <p class="text-lg md:text-xl font-medium mt-2 text-[#6A0DAD]">
                Viva grandes momentos!
            </p>

            <div class="mt-4 flex flex-wrap gap-2 justify-center">
                <span class="px-3 py-1 bg-onvibe-light border border-onvibe-border text-[#8A168F] text-xs font-semibold rounded-full">Música</span>
                <span class="px-3 py-1 bg-onvibe-light border border-onvibe-border text-[#8A168F] text-xs font-semibold rounded-full">Shows</span>
                <span class="px-3 py-1 bg-onvibe-light border border-onvibe-border text-[#8A168F] text-xs font-semibold rounded-full">Experiências</span>
            </div>
        </div>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="max-w-5xl mx-auto px-4 py-10 flex-grow space-y-12">

        <!-- CARDS DE EVENTOS -->
        <section>
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-[#8A168F] flex items-center justify-center gap-2">
                    <span>✨</span> Próximos Eventos
                </h2>
                <p class="text-gray-600 text-sm mt-1">Clique para selecionar rapidamente o seu evento preferido</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white border border-onvibe-border rounded-2xl p-5 card-shadow card-hover flex flex-col justify-between">
                    <div>
                        <div class="w-full h-32 bg-gradient-to-br from-purple-100 to-fuchsia-50 rounded-xl mb-4 flex items-center justify-center text-4xl shadow-inner border border-purple-100">
                            🎡
                        </div>
                        <span class="px-2.5 py-0.5 text-xs bg-purple-100 text-[#8A168F] font-semibold rounded-md">15 NOV</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-2">Festival ONVIBE</h3>
                        <p class="text-xs text-gray-500 mt-1">O maior festival de música e arte do ano.</p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block uppercase font-medium">A partir de</span>
                            <span class="text-base font-extrabold text-[#8A168F]">R$ 120,00</span>
                        </div>
                        <button onclick="selecionarEventoDireto('Festival ONVIBE')" class="px-3.5 py-1.5 bg-purple-50 hover:bg-[#8A168F] text-[#8A168F] hover:text-white rounded-lg text-xs font-bold transition-all">
                            Selecionar
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white border border-onvibe-border rounded-2xl p-5 card-shadow card-hover flex flex-col justify-between">
                    <div>
                        <div class="w-full h-32 bg-gradient-to-br from-purple-100 to-indigo-50 rounded-xl mb-4 flex items-center justify-center text-4xl shadow-inner border border-purple-100">
                            🎸
                        </div>
                        <span class="px-2.5 py-0.5 text-xs bg-purple-100 text-[#8A168F] font-semibold rounded-md">02 DEZ</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-2">ONVIBE Music</h3>
                        <p class="text-xs text-gray-500 mt-1">Uma noite especial com o melhor do pop/rock.</p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block uppercase font-medium">A partir de</span>
                            <span class="text-base font-extrabold text-[#8A168F]">R$ 90,00</span>
                        </div>
                        <button onclick="selecionarEventoDireto('ONVIBE Music')" class="px-3.5 py-1.5 bg-purple-50 hover:bg-[#8A168F] text-[#8A168F] hover:text-white rounded-lg text-xs font-bold transition-all">
                            Selecionar
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white border border-onvibe-border rounded-2xl p-5 card-shadow card-hover flex flex-col justify-between">
                    <div>
                        <div class="w-full h-32 bg-gradient-to-br from-purple-100 to-pink-50 rounded-xl mb-4 flex items-center justify-center text-4xl shadow-inner border border-purple-100">
                            🪩
                        </div>
                        <span class="px-2.5 py-0.5 text-xs bg-purple-100 text-[#8A168F] font-semibold rounded-md">31 DEZ</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-2">ONVIBE Night</h3>
                        <p class="text-xs text-gray-500 mt-1">Festa exclusiva de réveillon com os melhores DJs.</p>
                    </div>
                    <div class="mt-6 pt-3 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-gray-400 block uppercase font-medium">A partir de</span>
                            <span class="text-base font-extrabold text-[#8A168F]">R$ 150,00</span>
                        </div>
                        <button onclick="selecionarEventoDireto('ONVIBE Night')" class="px-3.5 py-1.5 bg-purple-50 hover:bg-[#8A168F] text-[#8A168F] hover:text-white rounded-lg text-xs font-bold transition-all">
                            Selecionar
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- FORMULÁRIO -->
        <section id="sessao-compra" class="max-w-xl mx-auto">
            <div class="bg-white border border-onvibe-border rounded-3xl p-6 md:p-8 card-shadow relative">
                
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-[#8A168F] flex items-center justify-center gap-2">
                        🎟️ Compra de Ingressos 🎟️
                    </h2>
                    <p class="text-xs text-gray-500 mt-1">Preencha os campos para garantir o seu lugar</p>
                </div>

                <form action="logica.php" method="POST" id="formIngresso" onsubmit="validarFormulario(event)" class="space-y-5">

                    <div>
                        <label for="nome" class="block text-sm font-semibold text-[#5E0B8A] mb-1.5">Nome:</label>
                        <input type="text" id="nome" name="nome" required placeholder="Digite seu nome completo"
                            class="w-full bg-white border border-purple-200 rounded-xl px-4 py-2.5 text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#8A168F] focus:ring-2 focus:ring-[#8A168F]/20 transition-all text-sm">
                    </div>

                    <div>
                        <label for="evento" class="block text-sm font-semibold text-[#5E0B8A] mb-1.5">Evento:</label>
                        <select id="evento" name="evento" required onchange="calcularValorTotal()"
                            class="w-full bg-white border border-purple-200 rounded-xl px-4 py-2.5 text-gray-800 focus:outline-none focus:border-[#8A168F] focus:ring-2 focus:ring-[#8A168F]/20 transition-all text-sm cursor-pointer">
                            <option value="" disabled selected>Selecione um evento</option>
                            <option value="Festival ONVIBE">Festival ONVIBE</option>
                            <option value="ONVIBE Music">ONVIBE Music</option>
                            <option value="ONVIBE Night">ONVIBE Night</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="ingresso" class="block text-sm font-semibold text-[#5E0B8A] mb-1.5">Tipo de ingresso:</label>
                            <select id="ingresso" name="ingresso" required onchange="calcularValorTotal()"
                                class="w-full bg-white border border-purple-200 rounded-xl px-4 py-2.5 text-gray-800 focus:outline-none focus:border-[#8A168F] focus:ring-2 focus:ring-[#8A168F]/20 transition-all text-sm cursor-pointer">
                                <option value="" disabled selected>Selecione</option>
                                <option value="Inteira">Inteira</option>
                                <option value="Meia">Meia</option>
                                <option value="VIP">VIP</option>
                            </select>
                        </div>

                        <div>
                            <label for="quantidade" class="block text-sm font-semibold text-[#5E0B8A] mb-1.5">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" min="1" max="10" value="1" required onchange="calcularValorTotal()" onkeyup="calcularValorTotal()"
                                class="w-full bg-white border border-purple-200 rounded-xl px-4 py-2.5 text-gray-800 focus:outline-none focus:border-[#8A168F] focus:ring-2 focus:ring-[#8A168F]/20 transition-all text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="pagamento" class="block text-sm font-semibold text-[#5E0B8A] mb-1.5">Forma de pagamento:</label>
                        <select id="pagamento" name="pagamento" required
                            class="w-full bg-white border border-purple-200 rounded-xl px-4 py-2.5 text-gray-800 focus:outline-none focus:border-[#8A168F] focus:ring-2 focus:ring-[#8A168F]/20 transition-all text-sm cursor-pointer">
                            <option value="" disabled selected>Selecione</option>
                            <option value="PIX">PIX</option>
                            <option value="Cartão">Cartão</option>
                            <option value="Dinheiro">Dinheiro</option>
                        </select>
                    </div>

                    <div class="bg-onvibe-light border border-onvibe-border rounded-xl p-4 flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold text-[#6A0DAD] block uppercase tracking-wider">Valor Total Estimado</span>
                            <span class="text-[11px] text-gray-500">Atualizado dinamicamente</span>
                        </div>
                        <div id="displayTotal" class="text-2xl font-black text-[#8A168F]">
                            R$ 0,00
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full py-3.5 px-6 bg-[#8A168F] hover:bg-[#6A0DAD] text-white font-bold rounded-xl btn-shadow transform hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 text-base cursor-pointer flex items-center justify-center gap-2">
                        <span>🛒</span> Comprar ingresso
                    </button>

                </form>
            </div>
        </section>

    </main>

    <!-- RODAPÉ -->
    <footer class="bg-white border-t border-onvibe-border py-8 px-4 text-center mt-12 space-y-2">
        <p class="font-bold text-[#8A168F] tracking-wider uppercase text-sm">
            ONVIBE EVENTOS
        </p>
        <p class="text-xs text-[#6A0DAD] font-medium">
            Música • Shows • Experiências
        </p>
        <p class="text-[11px] text-gray-400 pt-2">
            &copy; 2026 ONVIBE Eventos - Todos os direitos reservados.
        </p>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        const PRECOS_EVENTOS = {
            "Festival ONVIBE": 120.00,
            "ONVIBE Music": 90.00,
            "ONVIBE Night": 150.00
        };

        const MULTIPLICADORES_TIPO = {
            "Inteira": 1.0,
            "Meia": 0.5,
            "VIP": 1.5
        };

        function selecionarEventoDireto(nomeEvento) {
            const selectEvento = document.getElementById('evento');
            selectEvento.value = nomeEvento;
            document.getElementById('sessao-compra').scrollIntoView({ behavior: 'smooth' });
            calcularValorTotal();
        }

        function calcularValorTotal() {
            const eventoSelecionado = document.getElementById('evento').value;
            const tipoSelecionado = document.getElementById('ingresso').value;
            const quantidade = parseInt(document.getElementById('quantidade').value) || 0;
            const displayTotal = document.getElementById('displayTotal');

            if (!eventoSelecionado || !tipoSelecionado || quantidade <= 0) {
                displayTotal.innerText = "R$ 0,00";
                return 0;
            }

            const precoBase = PRECOS_EVENTOS[eventoSelecionado] || 0;
            const multiplicador = MULTIPLICADORES_TIPO[tipoSelecionado] || 1.0;
            const valorTotal = (precoBase * multiplicador) * quantidade;

            const valorFormatado = valorTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            displayTotal.innerText = valorFormatado;

            return valorTotal;
        }

        function validarFormulario(event) {
            const evento = document.getElementById('evento').value;
            const ingresso = document.getElementById('ingresso').value;
            const pagamento = document.getElementById('pagamento').value;

            if (!evento || !ingresso || !pagamento) {
                event.preventDefault();
                alert('Por favor, preencha todos os campos do formulário para prosseguir com a compra.');
            }
        }
    </script>
</body>

</html>