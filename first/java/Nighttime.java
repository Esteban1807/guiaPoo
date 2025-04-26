
public class Nighttime extends Extras {

    private final float nighttime = 1.75f;
    private final int factor;

    public Nighttime(int extraHours) {
        super(extraHours);
        this.factor = extraHours;
    }

    @Override
    public float extraPay(int valueHour) {
        return (valueHour * nighttime) * factor;
    }
}