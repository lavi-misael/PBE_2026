<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante - ONVIBE EVENTOS</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#f8f0ff] min-h-screen text-slate-800 flex flex-col justify-between p-4 md:p-8">

    <!-- Container Central -->
    <main class="max-w-2xl mx-auto w-full my-auto">
        <div class="bg-white rounded-3xl shadow-xl border border-purple-100 overflow-hidden">
            
            <!-- Cabeçalho -->
            <div class="bg-gradient-to-r from-[#8A168F] to-[#6A0DAD] p-6 text-white text-center">
                <img src="logo.png" alt="ONVIBE EVENTOS" class="w-48 mx-auto mb-3 filter drop-shadow-md" onerror="this.style.display='none'">
                
                <span class="inline-block bg-white/20 text-xs px-3 py-1 rounded-full uppercase tracking-widest font-bold mb-2">
                    Comprovante de Compra
                </span>
                
                <h1 class="text-3xl font-extrabold tracking-tight">Compra realizada!</h1>
                <p class="text-purple-100 text-sm mt-1">Confira os dados da sua compra:</p>
            </div>

            <!-- Conteúdo Principal -->
            <div class="p-6 md:p-8 space-y-6">

                <div class="border-b border-purple-100 pb-3">
                    <h2 class="text-xl font-bold text-[#8A168F] flex items-center gap-2">
                        📋 Relatório da Compra
                    </h2>
                </div>

                <!-- Dados do Cliente e Evento -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-[#f8f0ff]/70 p-5 rounded-2xl border border-purple-100/80">
                    <div>
                        <p class="text-xs uppercase tracking-wider text-purple-600 font-bold">Nome do Cliente</p>
                        <p class="text-base font-semibold text-slate-800 mt-0.5"><?= htmlspecialchars($nome); ?></p>
                    </div>

                    <div>
                        <p class="text-xs uppercase tracking-wider text-purple-600 font-bold">Evento Selecionado</p>
                        <p class="text-base font-semibold text-[#8A168F] mt-0.5"><?= htmlspecialchars($eventoEscolhido); ?></p>
                    </div>

                    <div>
                        <p class="text-xs uppercase tracking-wider text-purple-600 font-bold">Tipo de Ingresso</p>
                        <p class="text-base font-semibold text-slate-800 mt-0.5"><?= htmlspecialchars($tipoIngresso); ?></p>
                    </div>

                    <div>
                        <p class="text-xs uppercase tracking-wider text-purple-600 font-bold">Quantidade</p>
                        <p class="text-base font-semibold text-slate-800 mt-0.5"><?= (int)$quantidade; ?> unidade(s)</p>
                    </div>

                    <div class="md:col-span-2 pt-2 border-t border-purple-200/50">
                        <p class="text-xs uppercase tracking-wider text-purple-600 font-bold">Forma de Pagamento</p>
                        <p class="text-base font-semibold text-slate-800 mt-0.5"><?= htmlspecialchars($pagamento); ?></p>
                    </div>
                </div>

                <!-- Tabela de Valores -->
                <div class="overflow-x-auto rounded-xl border border-purple-100 shadow-sm">
                    <table class="w-full text-center border-collapse">
                        <thead>
                            <tr class="bg-gradient-to-r from-[#8A168F] to-[#6A0DAD] text-white text-sm">
                                <th class="py-3.5 px-4 font-semibold">Valor por Ingresso</th>
                                <th class="py-3.5 px-4 font-semibold">Subtotal</th>
                                <th class="py-3.5 px-4 font-semibold">Desconto</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-purple-50 bg-white text-sm">
                            <tr class="hover:bg-purple-50/50 transition">
                                <td class="py-3.5 px-4 font-medium text-slate-700">
                                    R$ <?= number_format($preco, 2, ',', '.'); ?>
                                </td>
                                <td class="py-3.5 px-4 font-medium text-slate-700">
                                    R$ <?= number_format($total, 2, ',', '.'); ?>
                                </td>
                                <td class="py-3.5 px-4 font-bold text-emerald-600">
                                    - R$ <?= number_format($desconto, 2, ',', '.'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Destaque do Valor Final -->
                <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-5 rounded-2xl border border-purple-200/60 text-center shadow-inner">
                    <p class="text-xs uppercase tracking-widest text-[#6A0DAD] font-bold mb-1">Valor Total a Pagar</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#8A168F]">
                        R$ <?= number_format($valorFinal, 2, ',', '.'); ?>
                    </h2>
                </div>

                <div class="text-center pt-2">
                    <p class="text-base font-semibold text-[#6A0DAD]">
                        🎉 Obrigado por escolher a ONVIBE EVENTOS! 🎉
                    </p>
                </div>

                <!-- Botões de Ação -->
                <div class="pt-2 flex flex-col sm:flex-row gap-3">
                    <button onclick="window.print()" class="w-full bg-[#8A168F] hover:bg-[#6A0DAD] text-white py-3 px-4 rounded-xl font-bold transition shadow-md hover:shadow-purple-200 flex items-center justify-center gap-2">
                        🖨️ Imprimir Comprovante
                    </button>

                    <a href="index.php" class="w-full bg-purple-100 hover:bg-purple-200 text-[#8A168F] py-3 px-4 rounded-xl font-bold transition text-center flex items-center justify-center gap-2">
                        ← Nova Compra
                    </a>
                </div>

            </div>
        </div>
    </main>

    <footer class="text-center text-xs text-purple-700/60 py-4 mt-6">
        ONVIBE EVENTOS • Música • Shows • Experiências
    </footer>

</body>

</html>