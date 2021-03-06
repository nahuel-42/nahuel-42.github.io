package capaDePresentacion;

import capaDeNegocios.Agencia;
import capaDeNegocios.Contratacion;
import excepciones.LoginException;

/**
 *<b>
 *Clase abstracta con los metodos comunes cambiarEStadoTicket, elegirUsuario_puntaje y listaDeAsignaciones.
 *
 */
public abstract class Usuario {
	
	/**
	 * <b>
	 * Se logea el usuario en el sistema.
	 */
	public Usuario login(String nombreUsuario, String contrasenia) {
		Usuario usuario=null;
		try {
			usuario=Agencia.getInstance().login(nombreUsuario, contrasenia);
		}
		catch (LoginException e) {
			System.out.println(e.getMessage());
		}
		return usuario;
	}
	
	public void mostrarListaContrataciones() {
		for(Contratacion contratacion:Agencia.getInstance().getContrataciones()) {
			System.out.println(contratacion);
		}
	}
	
	/**
	 * <b>
	 * Se deslogea el usuario del sistema.
	 */
	public void logout() {
		Agencia.getInstance().logout(this); 
	}
	
	/**
	 * <b>
	 * Borra la cuenta del sistema.
	 */
	public void borrarCuenta() {
		Agencia.getInstance().borrarCuenta(this);
	}
}
