function agregaCarrito1() {
	const contenedor = document.querySelector('#app')
	let html='';
	
	html+=`
	<table>
		<tr>
			<th>Producto</th>
			<th>Precio</th>
		</tr>

		<tr> 
			<th>Armed Dragon</th>
			<th>$349.99</th>
		</tr>
	</table>`;
	contenedor.innerHTML=html;
}
