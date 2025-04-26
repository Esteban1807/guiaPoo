
public class Arl extends Discounts {

    private final int level;
    private float arl;

    public Arl(int level) {
        this.level = level;

        if (level < 1 || level > 5) {
            System.out.println("Risk Level non-existent\n");
            this.arl = 0;
        } else {
            setArl();
        }
    }

    private void setArl() {
        switch (level) {
            case 1 -> arl = 0.005f;
            case 2 -> arl = 0.01f;
            case 3 -> arl = 0.02f;
            case 4 -> arl = 0.04f;
            case 5 -> arl = 0.06f;
        }
    }

    @Override
    public float discounts(int salary) {
        return salary * arl;
    }
}