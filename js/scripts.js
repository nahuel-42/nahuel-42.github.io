const imagen1 = document.getElementById('titulo_empresa');
const imagen2 = document.getElementById('subtitulo_empresa');
const imagen3 = document.getElementById('tituloplacas_empresa');
const imagen4 = document.getElementById('titulo_clientes');
const imagen5 = document.getElementById('titulo_servicios');



const placa1_empresa = document.getElementById('placa1_empresa');
const placa2_empresa = document.getElementById('placa2_empresa');
const placa3_empresa = document.getElementById('placa3_empresa');

const cargarImagen = (entradas, observador) => {

	entradas.forEach((entrada) => {
		if(entrada.isIntersecting){
			const elementoObservado = entrada.target;
            console.log(entrada.target.id)
            if (elementoObservado.id === 'titulo_empresa') {
                entrada.target.classList.add('visible');
                imagen2.classList.add('visible');
            } else if (elementoObservado.id === 'subtitulo_empresa') {
                entrada.target.classList.add('visible');
            } else if (elementoObservado.id === 'tituloplacas_empresa') {
                entrada.target.classList.add('visible');
                placa1_empresa.classList.add('visible');
                placa2_empresa.classList.add('visible');
                placa3_empresa.classList.add('visible');
            } 
             else if (elementoObservado.id === 'titulo_clientes' || elementoObservado.id === 'titulo_servicios') {
                entrada.target.classList.add('visible');
            }
		} else {
			// entrada.target.classList.remove('visible');
		}
	});
}

const observador = new IntersectionObserver(cargarImagen, {
	root: null,
	rootMargin: '500px 0px 100px 0px',
	threshold: 1.0
});

if (imagen1) observador.observe(imagen1);
if (imagen3) observador.observe(imagen3);
if (imagen4) observador.observe(imagen4);
if (imagen5) observador.observe(imagen5);