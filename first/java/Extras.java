
public abstract class Extras {
    
    protected int extraHours;

    public Extras(int extraHours) {
        this.extraHours = extraHours;
    }

    public abstract float extraPay(int valueHour);
}
