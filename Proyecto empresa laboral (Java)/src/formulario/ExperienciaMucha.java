package formulario;
/**
 *<br>
 *La clase ExperienciaMucha es parte del patron Double Dispatch para la categoria del formulario ExperienciaPrevia
 */
public class ExperienciaMucha implements ExperienciaPrevia{
	
	public double compara(ExperienciaPrevia otracaract) {
		return otracaract.comparaMucha();
	}

	public double comparaNada() {
		return 2;
	}

	public double comparaMedia() {
		return 1.5;
	}

	public double comparaMucha() {
		return 1;
	}

	@Override
	public String toString() {
		return "Mucha ";
	}
    

}
