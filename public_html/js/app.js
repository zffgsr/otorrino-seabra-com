// Efeito Scroll Header
const header = document.querySelector('.main-header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Dicionário de serviços
const servicosData = {
    "s1": { titulo: "Audiometria Tonal e Vocal", desc: "Principal exame da avaliação audiológica e vocal, determina os limiares de audição bem como a capacidade de compreensão e discriminação da fala." },
    "s2": { titulo: "Impedancimetria / Timpanograma", desc: "Avalia a mobilidade da membrana timpânica, as pressões no ouvido médio e o seu estado funcional perante diferentes frequências." },
    "s4": { titulo: "Potenciais Evocados Auditivos (BER)", desc: "Testes neurofisiológicos que avaliam de forma objetiva a condução dos impulsos nervosos desde o ouvido interno até ao tronco cerebral." },
    "s5": { titulo: "Acufenometria", desc: "Exame que permite identificar e avaliar com precisão as características de acufenos (zumbidos), medindo a sua frequência e intensidade." },
    "s10": { titulo: "Videonistagmografia (VNG/ENG)", desc: "Permite a observação e o registo detalhado dos movimentos oculares para avaliar com rigor perturbações do equilíbrio e funções vestibulares." },
    "s12": { titulo: "Reabilitação Auditiva (Aparelhos Auditivos)", desc: "Aconselhamento, seleção e ajuste de aparelhos auditivos (próteses) perfeitamente adequados ao estilo de vida e necessidades do paciente." },
    "s13": { titulo: "Endoscopia (Nariz e Laringe)", desc: "Exame que permite a visualização direta e detalhada das fossas nasais, faringe e laringe através de fibra ótica flexível ou rígida, de forma indolor." },
    "s14": { titulo: "Surdez Infantil e no Adulto", desc: "Diagnóstico diferencial e tratamento da perda auditiva em todas as faixas etárias, englobando desde o rastreio neonatal até à presbiacusia no estado adulto." },
    "s15": { titulo: "Perturbações do Equilíbrio / Tonturas", desc: "Avaliação clínica e instrumental especializada de quadros de vertigens, instabilidade e tonturas, com vista a um tratamento e correta reabilitação vestibular." },
    "s16": { titulo: "Polissonografia – Estudo do Sono", desc: "Exame fundamental realizado durante o sono para diagnosticar distúrbios respiratórios associados, como a apneia obstrutiva do sono e roncologia crónica." }
};

// Lógica do Modal Nativo
const modal = document.getElementById('modal-servico');
const modalTitulo = document.getElementById('modal-titulo');
const modalConteudo = document.getElementById('modal-conteudo');
const btnFechar = document.getElementById('close-modal');

if (modal && btnFechar) {
    document.querySelectorAll('.open-modal').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const id = link.getAttribute('data-id');
            const servico = servicosData[id];
            
            if(servico) {
                modalTitulo.textContent = servico.titulo;
                modalConteudo.innerHTML = `<p>${servico.desc}</p>`;
                modal.showModal();
            }
        });
    });

    btnFechar.addEventListener('click', () => modal.close());
    
    // Fechar ao clicar fora
    modal.addEventListener('click', (e) => {
        const rect = modal.getBoundingClientRect();
        const isInDialog = (rect.top <= e.clientY && e.clientY <= rect.top + rect.height
          && rect.left <= e.clientX && e.clientX <= rect.left + rect.width);
        if (!isInDialog) {
            modal.close();
        }
    });
}

// Lógica do Formulário via Fetch API
// NOTA: Este listener é um fallback. O formulário principal (form-marcacao)
// tem o seu próprio listener inline em contactos.php com reCAPTCHA v3.
const form = document.getElementById('form-marcacao');
const respostaDiv = document.getElementById('form-resposta');

if (form) {
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        
        if(respostaDiv) respostaDiv.innerHTML = "A enviar...";
        
        try {
            const response = await fetch('php/email.php', {
                method: 'POST',
                body: formData
            });
            
            if (!response.ok) {
                throw new Error(`Erro HTTP: ${response.status}`);
            }

            const result = await response.json();
            
            if(result.sucesso) {
                if(respostaDiv) respostaDiv.innerHTML = `<span style="color: green;">${result.mensagem}</span>`;
                form.reset();
            } else {
                if(respostaDiv) respostaDiv.innerHTML = `<span style="color: red;">${result.mensagem}</span>`;
            }
        } catch (error) {
            console.error('Erro:', error);
            if(respostaDiv) respostaDiv.innerHTML = `<span style="color: red;">Erro ao contactar o servidor.</span>`;
        }
    });
}

function copyToClipboard(text, btnElement) {
    const textArea = document.createElement("textarea");
    textArea.value = text;
    textArea.style.position = "fixed";
    textArea.style.opacity = "0";
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        const successful = document.execCommand('copy');
        if(successful) showCopyFeedback(btnElement);
        else console.error('Fallback: Copy command failed.');
    } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
    }

    document.body.removeChild(textArea);
}

function showCopyFeedback(btnElement) {
    if (!btnElement) return;
    
    if (!btnElement.getAttribute('data-original-icon')) {
        btnElement.setAttribute('data-original-icon', btnElement.innerHTML);
    }
    
    btnElement.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/></svg>';
    btnElement.classList.add('copied');
    
    let tooltip = btnElement.parentElement.querySelector('.copy-tooltip');
    if (!tooltip) {
        tooltip = document.createElement('span');
        tooltip.className = 'copy-tooltip';
        tooltip.textContent = 'Copiado!';
        if(btnElement.parentElement) btnElement.parentElement.appendChild(tooltip);
    }
    
    setTimeout(() => {
        const original = btnElement.getAttribute('data-original-icon');
        if (original) btnElement.innerHTML = original;
        btnElement.classList.remove('copied');
        
        if (tooltip && tooltip.parentNode) {
            tooltip.parentNode.removeChild(tooltip);
        }
    }, 2000);
}

// Lógica da Pesquisa na Página Acordos
const searchInput = document.getElementById('search-input');
if (searchInput) {
    const cards = document.querySelectorAll('.acordo-card');
    const resultsCount = document.querySelector('.results-count');

    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach(card => {
            const nome = card.dataset.nome.toLowerCase();
            const isVisible = nome.includes(searchTerm);
            card.style.display = isVisible ? '' : 'none';
            if (isVisible) {
                visibleCount++;
            }
        });

        resultsCount.textContent = `${visibleCount} resultado(s)`;
    });
}