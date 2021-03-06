package formulario;

import capaDeNegocios.Agencia;
/**
 *<br>
 *La clase EntreV1YV2 es parte del patron Double Dispatch para la categoria del formulario Remuneracion
 */
public class EntreV1yV2 implements Remuneracion{
	
	public double compara(Remuneracion otracaract) {
		return otracaract.comparadeV2aV1();
	}
	public double comparaHastaV1() {
		return 0.5;
	}
	public double comparadeV2aV1() {
		return 1;
	}
	public double comparaMasdeV2() {
		return 1;
	}
	@Override
	public String toString() {
		return "Entre "+  Agencia.getInstance().getV1() + " y " +Agencia.getInstance().getV2();
	}
	
}
